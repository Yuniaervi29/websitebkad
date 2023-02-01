<?php ?><?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Banner_model extends CI_Model {
    function __construct() {
        parent::__construct();
        $this->load->model('master_model');
        // table
        $this->master_model->get_tables($this);
    }
    function get_public_banner() {
        $query = $this->db->query(" SELECT * FROM {$this->banner} ORDER BY banner_id DESC ");
        return $query->result();
    }
    function get_banner_by_id($id) {
        $id = $this->db->escape_str($id);
        $query = $this->db->query(" SELECT * FROM {$this->banner} WHERE banner_id = '$id' ");
        return (object)$query->row();
    }
    function insert_banner($data) {
        $data = $this->master_model->escape_all($data);
        $this->db->insert($this->banner, $data);
        return $this->db->affected_rows();
    }
    function update_banner($data, $id) {
        $id = $this->db->escape_str($id);
        $data = $this->master_model->escape_all($data);
        $this->db->where('banner_id', $id);
        $this->db->update($this->banner, $data);
        return $this->db->affected_rows();
    }
    function delete_banner($id) {
        $id = $this->db->escape_str($id);
        $this->db->where('banner_id', $id);
        $this->db->delete($this->banner);
        return $this->db->affected_rows();
    }
    /* article admin*/
    function get_banner() {
        $page = $this->input->post('page') ? $this->input->post('page') : 1;
        $rows = $this->input->post('rows') ? $this->input->post('rows') : 20;
        $sort = $this->input->post('sort') ? $this->input->post('sort') : 'banner_id';
        $order = $this->input->post('order') ? $this->input->post('order') : 'desc';
        $keyword = $this->input->post('q') ? $this->input->post('q') : '';
        $offset = ($page - 1) * $rows;
        $_sql_where = array();
        if (!empty($keyword)) {
            $_sql_where[] = " UCASE(title) LIKE '%" . strtoupper($this->db->escape_str($keyword)) . "%' ";
        }
        $sql_where = '';
        if (count($_sql_where) > 0) $sql_where = " WHERE " . implode(' AND ', $_sql_where);
        $sql = " SELECT * FROM {$this->banner} $sql_where ";
        $query = $this->db->query($sql);
        $ret['num_rows'] = $query->num_rows();
        $query = $this->db->query($sql . " ORDER BY $sort $order LIMIT $offset,$rows ");
        $ret['result'] = $query->result();
        return $ret;
    }
}