<?php ?><?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Download_category_model extends CI_Model {
    function __construct() {
        parent::__construct();
        $this->load->model('master_model');
        // table
        $this->master_model->get_tables($this);
    }
    function get_public_download_category() {
        $query = $this->db->query(" SELECT * FROM {$this->ms_category} ORDER BY category_id DESC ");
        return $query->result();
    }
    function get_download_category_by_id($id) {
        $id = $this->db->escape_str($id);
        $query = $this->db->query(" SELECT * FROM {$this->ms_category} WHERE category_id = '$id' ");
        return (object)$query->row();
    }
    
    ////////////////////////////////////////ardi
    function get_category_by_id($id) {
        $id = $this->db->escape_str($id);
        $query = $this->db->query(" SELECT * FROM {$this->ms_category} WHERE category_id = '$id' ");
        return (object)$query->row();
    }
    
    function update_category($data, $id) {
        $id = $this->db->escape_str($id);
        $data = $this->master_model->escape_all($data);
        $this->db->where('category_id', $id);
        $this->db->update($this->ms_category, $data);
        return $this->db->affected_rows();
    }
    function delete_category($id) {
        $id = $this->db->escape_str($id);
        $this->db->where('category_id', $id);
        $this->db->delete($this->ms_category);
        return $this->db->affected_rows();
    }
    function insert_category($data) {
        $data = $this->master_model->escape_all($data);
        $this->db->insert($this->ms_category, $data);
        return $this->db->affected_rows();
    }
    function get_category() {
        $page = $this->input->post('page') ? $this->input->post('page') : 1;
        $rows = $this->input->post('rows') ? $this->input->post('rows') : 100;
        $sort = $this->input->post('sort') ? $this->input->post('sort') : 'category_id';
        $order = $this->input->post('order') ? $this->input->post('order') : 'desc';
        $keyword = $this->input->post('q') ? $this->input->post('q') : '';
        $offset = ($page - 1) * $rows;
        $_sql_where = array();
        if (!empty($keyword)) {
            $_sql_where[] = " UCASE(title) LIKE '%" . strtoupper($this->db->escape_str($keyword)) . "%' ";
        }
        $sql_where = '';
        if (count($_sql_where) > 0) $sql_where = " WHERE " . implode(' AND ', $_sql_where);
        $sql = " SELECT * FROM {$this->ms_category} $sql_where ";
        $query = $this->db->query($sql);
        $ret['num_rows'] = $query->num_rows();
        $query = $this->db->query($sql . " ORDER BY $sort $order LIMIT $offset,$rows ");
        $ret['result'] = $query->result();
        return $ret;
    }
    function get_category_all() {
        $query = $this->db->query(" SELECT * FROM {$this->ms_category} ORDER BY category_id ASC ");
        return $query->result();
    }
    /////////////////////////////////////////ardi
    
    
    function insert_download_category($data) {
        $data = $this->master_model->escape_all($data);
        $this->db->insert($this->ms_category, $data);
        return $this->db->affected_rows();
    }
    function update_download_category($data, $id) {
        $id = $this->db->escape_str($id);
        $data = $this->master_model->escape_all($data);
        $this->db->where('category_id', $id);
        $this->db->update($this->ms_category, $data);
        return $this->db->affected_rows();
    }
    function delete_download_category($id) {
        $id = $this->db->escape_str($id);
        $this->db->where('category_id', $id);
        $this->db->delete($this->ms_category);
        return $this->db->affected_rows();
    }
    function get_download_category_all() {
        $query = $this->db->query(" SELECT * FROM {$this->ms_category} ORDER BY category ASC ");
        return $query->result();
    }
    function get_download_category_select() {
        $p = $this->get_download_category_all();
        $t = array();
        if (count($p) > 0) {
            foreach ($p as $row) {
                $t[$row->category_id] = $row->category;
            }
        }
        return $t;
    }
    /* article admin*/
    function get_download_category() {
        $page = $this->input->post('page') ? $this->input->post('page') : 1;
        $rows = $this->input->post('rows') ? $this->input->post('rows') : 20;
        $sort = $this->input->post('sort') ? $this->input->post('sort') : 'category_id';
        $order = $this->input->post('order') ? $this->input->post('order') : 'desc';
        $keyword = $this->input->post('q') ? $this->input->post('q') : '';
        $offset = ($page - 1) * $rows;
        $_sql_where = array();
        if (!empty($keyword)) {
            $_sql_where[] = " UCASE(title) LIKE '%" . strtoupper($this->db->escape_str($keyword)) . "%' ";
        }
        $sql_where = '';
        if (count($_sql_where) > 0) $sql_where = " WHERE " . implode(' AND ', $_sql_where);
        $sql = " SELECT * FROM {$this->ms_category} $sql_where ";
        $query = $this->db->query($sql);
        $ret['num_rows'] = $query->num_rows();
        $query = $this->db->query($sql . " ORDER BY $sort $order LIMIT $offset,$rows ");
        $ret['result'] = $query->result();
        return $ret;
    }
}