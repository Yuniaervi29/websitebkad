<?php ?><?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Links_model extends CI_Model {
    function __construct() {
        parent::__construct();
        $this->load->model('master_model');
        // table
        $this->master_model->get_tables($this);
    }
    function get_public_links() {
        $query = $this->db->query(" SELECT * FROM {$this->links} WHERE link_status='publish' ORDER BY link_id DESC ");
        return $query->result();
    }
    function get_link_by_id($id) {
        $id = $this->db->escape_str($id);
        $query = $this->db->query(" SELECT * FROM {$this->links} WHERE link_id = '$id' ");
        return (object)$query->row();
    }
    function insert_link($data) {
        $data = $this->master_model->escape_all($data);
        $this->db->insert($this->links, $data);
        return $this->db->affected_rows();
    }
    function update_link($data, $id) {
        $id = $this->db->escape_str($id);
        $data = $this->master_model->escape_all($data);
        $this->db->where('link_id', $id);
        $this->db->update($this->links, $data);
        return $this->db->affected_rows();
    }
    function delete_link($id) {
        $id = $this->db->escape_str($id);
        $this->db->where('link_id', $id);
        $this->db->delete($this->links);
        return $this->db->affected_rows();
    }
    /* article admin*/
    function get_links() {
        $page = $this->input->post('page') ? $this->input->post('page') : 1;
        $rows = $this->input->post('rows') ? $this->input->post('rows') : 20;
        $sort = $this->input->post('sort') ? $this->input->post('sort') : 'link_id';
        $order = $this->input->post('order') ? $this->input->post('order') : 'desc';
        $keyword = $this->input->post('q') ? $this->input->post('q') : '';
        $offset = ($page - 1) * $rows;
        $_sql_where = array();
        if (!empty($keyword)) {
            $_sql_where[] = " UCASE(title) LIKE '%" . strtoupper($this->db->escape_str($keyword)) . "%' ";
        }
        $sql_where = '';
        if (count($_sql_where) > 0) $sql_where = " WHERE " . implode(' AND ', $_sql_where);
        $sql = " SELECT * FROM {$this->links} L LEFT JOIN {$this->user} U ON (U.uid=L.uid) $sql_where ";
        $query = $this->db->query($sql);
        $ret['num_rows'] = $query->num_rows();
        $query = $this->db->query($sql . " ORDER BY $sort $order LIMIT $offset,$rows ");
        $ret['result'] = $query->result();
        return $ret;
    }
}