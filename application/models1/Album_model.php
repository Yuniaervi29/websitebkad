<?php ?><?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class album_model extends CI_Model {
    function __construct() {
        parent::__construct();
        $this->load->model('master_model');
        // table
        $this->master_model->get_tables($this);
    }
    function get_album_by_id($id) {
        $id = $this->db->escape_str($id);
        $query = $this->db->query(" SELECT * FROM {$this->album} WHERE album_id = '$id' ");
        return (object)$query->row();
    }
    function insert_album($data) {
        $data = $this->master_model->escape_all($data);
        $this->db->insert($this->album, $data);
        return $this->db->affected_rows();
    }
    function update_album($data, $id) {
        $id = $this->db->escape_str($id);
        $data = $this->master_model->escape_all($data);
        $this->db->where('album_id', $id);
        $this->db->update($this->album, $data);
        return $this->db->affected_rows();
    }
    function delete_album($id) {
        $id = $this->db->escape_str($id);
        $this->db->where('album_id', $id);
        $this->db->delete($this->album);
        return $this->db->affected_rows();
    }
    function get_album() {
        $page = $this->input->post('page') ? $this->input->post('page') : 1;
        $rows = $this->input->post('rows') ? $this->input->post('rows') : 20;
        $sort = $this->input->post('sort') ? $this->input->post('sort') : 'album_id';
        $order = $this->input->post('order') ? $this->input->post('order') : 'desc';
        $keyword = $this->input->post('q') ? $this->input->post('q') : '';
        $offset = ($page - 1) * $rows;
        $_sql_where = array();
        if (!empty($keyword)) {
            $_sql_where[] = " UCASE(album_title) LIKE '%" . strtoupper($this->db->escape_str($keyword)) . "%' ";
        }
        $sql_where = '';
        if (count($_sql_where) > 0) $sql_where = " WHERE " . implode(' AND ', $_sql_where);
        $sql = " SELECT * FROM {$this->album} $sql_where ";
        $query = $this->db->query($sql);
        $ret['num_rows'] = $query->num_rows();
        $query = $this->db->query($sql . " ORDER BY $sort $order LIMIT $offset,$rows ");
        $ret['result'] = $query->result();
        return $ret;
    }
    function get_album_all() {
        $query = $this->db->query("SELECT a.* FROM album a INNER JOIN gallery b ON a.album_id=b.album_id group by a.album_id ORDER BY album_title ASC  ");
        return $query->result();
    }
    function get_album_select() {
        $tmp = array();
        $res = $this->get_album_all();
        if (count($res) > 0) {
            foreach ($res as $row) {
                $tmp[$row->album_id] = ucfirst($row->album_title);
            }
        }
        return $tmp;
    }
}