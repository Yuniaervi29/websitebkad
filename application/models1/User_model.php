<?php ?><?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class User_model extends CI_Model {
    function __construct() {
        parent::__construct();
        $this->load->model('master_model');
        // table
        $this->master_model->get_tables($this);
    }
    function get_user() {
        $sort = $this->input->post('sort') ? $this->input->post('sort') : 'uid';
        $order = $this->input->post('order') ? $this->input->post('order') : 'asc';
        $sql = " SELECT * FROM {$this->user} ORDER BY $sort $order ";
        $query = $this->db->query($sql);
        return $query->result();
    }
    function user_exists($str) {
        $str = $this->db->escape_str($str);
        $query = $this->db->query(" SELECT * FROM {$this->user} WHERE UCASE(username)=UCASE('$str') ");
        if ($query->num_rows() > 0) return TRUE;
        else return FALSE;
    }
    function get_user_by_id($id) {
        $id = $this->db->escape_str($id);
        $query = $this->db->query(" SELECT * FROM {$this->user} WHERE uid='$id' ");
        return (OBJECT)$query->row();
    }
    function insert_user($data) {
        $data = $this->master_model->escape_all($data);
        $this->db->insert($this->user, $data);
        return $this->db->affected_rows();
    }
    function update_user($data, $id) {
        $id = $this->db->escape_str($id);
        $data = $this->master_model->escape_all($data);
        $this->db->where('uid', $id);
        $this->db->update($this->user, $data);
        return $this->db->affected_rows();
    }
    function delete_user($id) {
        $id = $this->db->escape_str($id);
        $this->db->where('uid', $id);
        $this->db->delete($this->user);
        return $this->db->affected_rows();
    }
    function get_user_access($id) {
        $acc = array();
        $id = $this->db->escape_str($id);
        $query = $this->db->query(" SELECT * FROM {$this->user_access} WHERE uid='$id' ");
        $res = $query->result();
        if (count($res) > 0) {
            foreach ($res as $row) {
                $acc[$row->access] = $row->access;
            }
        }
        return $acc;
    }
    function insert_user_access($data) {
        $data = $this->master_model->escape_all($data);
        $this->db->insert($this->user_access, $data);
        return $this->db->affected_rows();
    }
    function delete_user_access($id) {
        $id = $this->db->escape_str($id);
        $this->db->where('uid', $id);
        $this->db->delete($this->user_access);
        return $this->db->affected_rows();
    }
    function set_cb($field, $uid = '') {
        if ($uid == '') {
            $default = '';
        } else {
            $acc = $this->get_user_access($uid);
            if (isset($acc[$field])) $default = 'checked';
            else $default = '';
        }
        if ($this->input->post()) $default = '';
        $access = $this->input->post('access');
        $ret = isset($access[$field]) ? 'checked' : $default;
        return $ret;
    }
    function do_login($u, $p) {
        $u = $this->db->escape_str($u);
        $p = $this->db->escape_str($p);
        $query = $this->db->query(" SELECT * FROM {$this->user} WHERE username='$u' AND password=md5('$p') ");
        if ($query->num_rows() > 0) {
            $cu = $query->row();
            $data = array();
            $data['login_status'] = 1;
            $data['current_user'] = $cu->uid;
            $this->session->set_userdata($data);
            return true;
        } else {
            return false;
        }
    }
    function current_user() {
        if ($username = $this->session->userdata('current_user')) {
            $CU = $this->get_user_by_id($username);
            return $CU;
        } else {
            return (object)array();
        }
    }
    function has_login($checkAccess = TRUE) {
        if ($this->session->userdata('login_status') != 1) {
            $redirect = isset($_SERVER['REQUEST_URI']) ? base64_encode('http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']) : '';
            $this->session->set_userdata('message', 'Anda harus login untuk masuk ke aplikasi. ');
            $this->session->set_userdata('message_type', 'error');
            redirect(site_url($this->config->item('admin_path') . '/log/in?redirect=' . $redirect));
            die();
        }
        if ($checkAccess) $this->has_access();
    }
    function has_access() {
        $default_controller = isset($this->router->routes['default_controller']) ? $this->router->routes['default_controller'] : 'welcome';
        $default_method = 'index';
        $controller = $this->uri->segment(2, $default_controller);
        $action = $this->uri->segment(3, $default_method);
        $default_access = array($default_controller => $default_controller, $default_controller . '/' . $default_method => $default_controller . '/' . $default_method, $controller . '/json' => $controller . '/json', $controller . '/iframe' => $controller . '/iframe');
        $CU = $this->current_user();
        $acc = $this->get_user_access($CU->uid);
        $acc = array_merge($default_access, $acc);
        if (!isset($acc[$controller . '/' . $action])) {
            $this->session->set_userdata('message', 'Anda tidak diijinkan mengakses / melakukan aksi pada halaman yang anda tuju.<br><br>Silakan hubungi administrator.');
            $this->session->set_userdata('message_type', 'error');
            $ref = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : site_url();
            redirect($ref);
            die();
        }
    }
    function logout() {
        $this->session->unset_userdata('login_status');
        $this->session->unset_userdata('current_user');
        $this->session->set_userdata('message', 'Anda telah keluar. ');
        $this->session->set_userdata('message_type', 'info');
        redirect(site_url($this->config->item('admin_path') . '/log/in'));
    }
}