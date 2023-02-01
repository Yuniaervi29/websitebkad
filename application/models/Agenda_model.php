<?php ?><?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class agenda_model extends CI_Model {
    function __construct() {
        parent::__construct();
        $this->load->model('master_model');
        // table
        
    }
    function get_agenda_by_id($id) {
        $id = $this->db->escape_str($id);
        $query = $this->db->query(" SELECT * FROM tb_agenda WHERE agenda_id = '$id' ");
        return (object)$query->row();
    }
    function insert_agenda($data) {
        $data = $this->master_model->escape_all($data);
        $this->db->insert('tb_agenda', $data);
        return $this->db->affected_rows();
    }
    function update_agenda($data, $id) {
        $id = $this->db->escape_str($id);
        $data = $this->master_model->escape_all($data);
        $this->db->where('agenda_id', $id);
        $this->db->update('tb_agenda', $data);
        return $this->db->affected_rows();
    }
    function delete_agenda($id) {
        $id = $this->db->escape_str($id);
        $this->db->where('agenda_id', $id);
        $this->db->delete('tb_agenda');
        return $this->db->affected_rows();
    }
    function get_agenda() {
        $page = $this->input->post('page') ? $this->input->post('page') : 1;
        $rows = $this->input->post('rows') ? $this->input->post('rows') : 2;
        $sort = $this->input->post('sort') ? $this->input->post('sort') : 'agenda_id';
        $order = $this->input->post('order') ? $this->input->post('order') : 'desc';
        $keyword = $this->input->post('q') ? $this->input->post('q') : '';
        $offset = ($page - 1) * $rows;
        $_sql_where = array();
        if (!empty($keyword)) {
            $_sql_where[] = " UCASE(title) LIKE '%" . strtoupper($this->db->escape_str($keyword)) . "%' ";
        }
        $sql_where = '';
        if (count($_sql_where) > 0) $sql_where = " WHERE " . implode(' AND ', $_sql_where);
        $sql = " SELECT * FROM tb_agenda $sql_where ";
        $query = $this->db->query($sql);
        $ret['num_rows'] = $query->num_rows();
        $query = $this->db->query($sql . " ORDER BY $sort $order LIMIT $offset,$rows ");
        $ret['result'] = $query->result();
        return $ret;
    }
    function get_agenda_limit() {
        $query = $this->db->query(" SELECT * FROM tb_agenda ORDER BY tgl_agenda DESC LIMIT 3 ");
        return $query->result();
    }
    function get_agenda_all() {
        $query = $this->db->query(" SELECT * FROM tb_agenda ORDER BY tgl_agenda");
        $ret['num_rows'] = $query->num_rows();
        $ret['result']=$query->result();
        return $ret;
    }
    function get_agenda_select() {
        $tmp = array();
        $res = $this->get_agenda_all();
        if (count($res) > 0) {
            foreach ($res as $row) {
                $tmp[$row->agenda_id] = ucfirst($row->title);
            }
        }
        return $tmp;
    }

    
}