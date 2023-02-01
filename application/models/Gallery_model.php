<?php ?><?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Gallery_model extends CI_Model {
    function __construct() {
        parent::__construct();
        $this->load->model('master_model');
        // table
        $this->master_model->get_tables($this);
    }
    function get_gallery_by_id($id) {
        $id = $this->db->escape_str($id);
        $query = $this->db->query(" SELECT * FROM {$this->gallery} WHERE gallery_id = '$id' ");
        return (object)$query->row();
    }
    function get_count_gallery_by_album($id) {
        $id = $this->db->escape_str($id);
        $query = $this->db->query(" SELECT * FROM {$this->gallery} WHERE album_id = '$id' ");
        return $query->num_rows();
    }
    function get_gallery_by_album($id) {
        $id = $this->db->escape_str($id);
        $start = $this->uri->segment(4, 0);
        $rows = 15;
        $_sql_where = array();
        $_sql_where[] = " G.album_id = '$id' ";
        if (!empty($keyword)) {
            $_sql_where[] = " UCASE(title) LIKE '%" . strtoupper($this->db->escape_str($keyword)) . "%' ";
        }
        $sql_where = '';
        if (count($_sql_where) > 0) $sql_where = " WHERE " . implode(' AND ', $_sql_where);
        $sql = " SELECT * FROM {$this->gallery} G LEFT JOIN {$this->album} A ON (A.album_id=G.album_id) $sql_where ";
        $query = $this->db->query($sql);
        $ret['num_rows'] = $query->num_rows();
        $query = $this->db->query($sql . " ORDER BY gallery_id DESC LIMIT $start,$rows ");
        $ret['result'] = $query->result();
        return $ret;
    }
    function insert_gallery($data) {
        $data = $this->master_model->escape_all($data);
        $this->db->insert($this->gallery, $data);
        return $this->db->affected_rows();
    }
    function update_gallery($data, $id) {
        $id = $this->db->escape_str($id);
        $data = $this->master_model->escape_all($data);
        $this->db->where('gallery_id', $id);
        $this->db->update($this->gallery, $data);
        return $this->db->affected_rows();
    }
    function delete_gallery($id) {
        $id = $this->db->escape_str($id);
        $this->db->where('gallery_id', $id);
        $this->db->delete($this->gallery);
        return $this->db->affected_rows();
    }
    function get_gallery() {
        $page = $this->input->post('page') ? $this->input->post('page') : 1;
        $rows = $this->input->post('rows') ? $this->input->post('rows') : 20;
        $sort = $this->input->post('sort') ? $this->input->post('sort') : 'gallery_id';
        $order = $this->input->post('order') ? $this->input->post('order') : 'desc';
        $keyword = $this->input->post('q') ? $this->input->post('q') : '';
        $offset = ($page - 1) * $rows;
        $_sql_where = array();
        if (!empty($keyword)) {
            $_sql_where[] = " UCASE(title) LIKE '%" . strtoupper($this->db->escape_str($keyword)) . "%' ";
        }
        $sql_where = '';
        if (count($_sql_where) > 0) $sql_where = " WHERE " . implode(' AND ', $_sql_where);
        $sql = " SELECT * FROM {$this->gallery} G LEFT JOIN {$this->album} A ON (A.album_id=G.album_id) $sql_where ";
        $query = $this->db->query($sql);
        $ret['num_rows'] = $query->num_rows();
        $query = $this->db->query($sql . " ORDER BY $sort $order LIMIT $offset,$rows ");
        $ret['result'] = $query->result();
        return $ret;
    }
}