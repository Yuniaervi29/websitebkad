<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Struktur_model extends CI_Model {
    function __construct() {
        parent::__construct();
        $this->load->model('master_model');
        // table
        
    }
    function get_struktur_by_id($id) {
        $id = $this->db->escape_str($id);
        $query = $this->db->query(" SELECT * FROM struktur_org WHERE id = '$id' ");
        return (object)$query->row();
    }
    function insert_struktur($data) {
        $data = $this->master_model->escape_all($data);
        $this->db->insert('struktur_org', $data);
        return $this->db->affected_rows();
    }
    function update_struktur($data, $id) {
        $id = $this->db->escape_str($id);
        $data = $this->master_model->escape_all($data);
        $this->db->where('id', $id);
        $this->db->update('struktur_org', $data);
        return $this->db->affected_rows();
    }
    function delete_struktur($id) {
        $id = $this->db->escape_str($id);
        $this->db->where('id', $id);
        $this->db->delete('struktur_org');
        return $this->db->affected_rows();
    }
    function get_struktur() {
        $page = $this->input->post('page') ? $this->input->post('page') : 1;
        $rows = $this->input->post('rows') ? $this->input->post('rows') : 2;
        $sort = $this->input->post('sort') ? $this->input->post('sort') : 'id';
        $order = $this->input->post('order') ? $this->input->post('order') : 'ASC';
        $keyword = $this->input->post('q') ? $this->input->post('q') : '';
        $offset = ($page - 1) * $rows;
        $_sql_where = array();
        if (!empty($keyword)) {
            $_sql_where[] = " UCASE(title) LIKE '%" . strtoupper($this->db->escape_str($keyword)) . "%' ";
        }
        $sql_where = '';
        if (count($_sql_where) > 0) $sql_where = " WHERE " . implode(' AND ', $_sql_where);
        $sql = " SELECT * FROM struktur_org $sql_where ";
        $query = $this->db->query($sql);
        $ret['num_rows'] = $query->num_rows();
        $query = $this->db->query($sql . " ORDER BY $sort $order  ");
        $ret['result'] = $query->result();
        return $ret;
    }
    function get_struktur_limit() {
        $query = $this->db->query(" SELECT * FROM struktur_org ORDER BY tgl_struktur DESC LIMIT 3 ");
        return $query->result();
    }
    function get_struktur_all() {
        $query = $this->db->query(" SELECT * FROM struktur_org ORDER BY tgl_struktur");
        $ret['num_rows'] = $query->num_rows();
        $ret['result']=$query->result();
        return $ret;
    }
    function get_struktur_select() {
        $tmp = array();
        $res = $this->get_struktur_all();
        if (count($res) > 0) {
            foreach ($res as $row) {
                $tmp[$row->id] = ucfirst($row->title);
            }
        }
        return $tmp;
    }

    
}