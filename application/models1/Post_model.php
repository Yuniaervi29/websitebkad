<?php ?><?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Post_model extends CI_Model {
    function __construct() {
        parent::__construct();
        $this->load->model('master_model');
        // table
        $this->master_model->get_tables($this);
    }
    function get_post_by_id($id) {
        $id = $this->db->escape_str($id);
        $query = $this->db->query(" SELECT * FROM {$this->posts} WHERE post_id = '$id' ");
        return (object)$query->row();
    }
    function get_single_post_by_type($type) {
        $type = $this->db->escape_str($type);
        $query = $this->db->query(" SELECT * FROM {$this->posts} WHERE post_type = LCASE('$type') ");
        return (object)$query->row();
    }
    function get_single_post_by_name($id) {
        $query = $this->db->query(" SELECT * FROM {$this->posts} P LEFT JOIN {$this->user} U ON (U.uid=P.post_author) WHERE post_id = '$id' ");
        return (object)$query->row();
    }
    function insert_post($data) {
        $data = $this->master_model->escape_all($data);
        $this->db->insert($this->posts, $data);
        return $this->db->affected_rows();
    }
    function update_post($data, $id) {
        $id = $this->db->escape_str($id);
        $data = $this->master_model->escape_all($data);
        $this->db->where('post_id', $id);
        $this->db->update($this->posts, $data);
        return $this->db->affected_rows();
    }
    function delete_post($id) {
        $id = $this->db->escape_str($id);
        $this->db->where('post_id', $id);
        $this->db->delete($this->posts);
        return $this->db->affected_rows();
    }
    /* article admin*/
    function get_article() {
        $page = $this->input->post('page') ? $this->input->post('page') : 1;
        $rows = $this->input->post('rows') ? $this->input->post('rows') : 20;
        $sort = $this->input->post('sort') ? $this->input->post('sort') : 'post_id';
        $order = $this->input->post('order') ? $this->input->post('order') : 'desc';
        $keyword = $this->input->post('q') ? $this->input->post('q') : '';
        $offset = ($page - 1) * $rows;
        $_sql_where = array();
        $_sql_where[] = " post_type = 'article' ";
        if (!empty($keyword)) {
            $_sql_where[] = " UCASE(post_name) LIKE '%" . strtoupper($this->db->escape_str($keyword)) . "%' ";
            $_sql_where[] = " UCASE(post_content) LIKE '%" . strtoupper($this->db->escape_str($keyword)) . "%' ";
        }
        $sql_where = '';
        if (count($_sql_where) > 0) $sql_where = " WHERE " . implode(' AND ', $_sql_where);
        $sql = " SELECT * FROM {$this->posts} $sql_where ";
        $query = $this->db->query($sql);
        $ret['num_rows'] = $query->num_rows();
        $query = $this->db->query($sql . " ORDER BY $sort $order LIMIT $offset,$rows ");
        $ret['result'] = $query->result();
        return $ret;
    }
    /* article public */
    function get_public_article() {
        $start = $this->uri->segment(3, 0);
        $rows = 4;
        $_sql_where = array();
        $_sql_where[] = " post_type = 'article' ";
        if (!empty($keyword)) {
            $_sql_where[] = " UCASE(post_title) LIKE '%" . strtoupper($this->db->escape_str($keyword)) . "%' ";
        }
        $sql_where = '';
        if (count($_sql_where) > 0) $sql_where = " WHERE " . implode(' AND ', $_sql_where);
        $sql = " SELECT * FROM {$this->posts} P LEFT JOIN {$this->user} U ON (U.uid=P.post_author) $sql_where ";
        $query = $this->db->query($sql);
        $ret['num_rows'] = $query->num_rows();
        $query = $this->db->query($sql . " ORDER BY post_date DESC LIMIT $start,$rows ");
        $ret['result'] = $query->result();
        return $ret;
    }
    /* arsip admin */
    function get_arsip() {
        $page = $this->input->post('page') ? $this->input->post('page') : 1;
        $rows = $this->input->post('rows') ? $this->input->post('rows') : 20;
        $sort = $this->input->post('sort') ? $this->input->post('sort') : 'post_id';
        $order = $this->input->post('order') ? $this->input->post('order') : 'desc';
        $keyword = $this->input->post('q') ? $this->input->post('q') : '';
        $offset = ($page - 1) * $rows;
        $_sql_where = array();
        $_sql_where[] = " post_type = 'arsip' ";
        if (!empty($keyword)) {
            $_sql_where[] = " UCASE(post_name) LIKE '%" . strtoupper($this->db->escape_str($keyword)) . "%' ";
            $_sql_where[] = " UCASE(post_content) LIKE '%" . strtoupper($this->db->escape_str($keyword)) . "%' ";
        }
        $sql_where = '';
        if (count($_sql_where) > 0) $sql_where = " WHERE " . implode(' AND ', $_sql_where);
        $sql = " SELECT * FROM {$this->posts} $sql_where ";
        $query = $this->db->query($sql);
        $ret['num_rows'] = $query->num_rows();
        $query = $this->db->query($sql . " ORDER BY $sort $order LIMIT $offset,$rows ");
        $ret['result'] = $query->result();
        return $ret;
    }
    /* arsip public */
    function get_public_arsip() {
        $start = $this->uri->segment(3, 0);
        $rows = 4;
        $_sql_where = array();
        $_sql_where[] = " post_type = 'arsip' ";
        if (!empty($keyword)) {
            $_sql_where[] = " UCASE(post_title) LIKE '%" . strtoupper($this->db->escape_str($keyword)) . "%' ";
        }
        $sql_where = '';
        if (count($_sql_where) > 0) $sql_where = " WHERE " . implode(' AND ', $_sql_where);
        $sql = " SELECT * FROM {$this->posts} P LEFT JOIN {$this->user} U ON (U.uid=P.post_author) $sql_where ";
        $query = $this->db->query($sql);
        $ret['num_rows'] = $query->num_rows();
        $query = $this->db->query($sql . " ORDER BY post_date DESC LIMIT $start,$rows ");
        $ret['result'] = $query->result();
        return $ret;
    }
    function get_latest_article($limit = 5) {
        $query = $this->db->query(" SELECT * FROM {$this->posts} WHERE post_type = 'article' ORDER BY post_date DESC LIMIT $limit ");
        return $query->result();
    }
    function get_latest_arsip($limit = 5) {
        $query = $this->db->query(" SELECT * FROM {$this->posts} WHERE post_type = 'arsip' ORDER BY post_date DESC LIMIT $limit ");
        return $query->result();
    }
    /* home public */
    function get_public_home() {
        $start = $this->uri->segment(3, 0);
        $rows = 5;
        $keyword = ($this->input->get('cari')) ? $this->input->get('cari') : '';
        $_sql_where = array();
        $_sql_where[] = " post_type = 'article' ";
        if (!empty($keyword)) {
            $_sql_where[] = " 
				(UCASE(post_title) LIKE '%" . strtoupper($this->db->escape_str($keyword)) . "%' OR
				UCASE(post_content) LIKE '%" . strtoupper($this->db->escape_str($keyword)) . "%')
			";
        }
        $sql_where = '';
        if (count($_sql_where) > 0) $sql_where = " WHERE " . implode(' AND ', $_sql_where);
        $sql = "SELECT * FROM {$this->posts} P LEFT JOIN {$this->user} U ON (U.uid=P.post_author) $sql_where ";
        $query = $this->db->query($sql);
        $ret['num_rows'] = $query->num_rows();
        $query = $this->db->query($sql . " ORDER BY post_date DESC LIMIT $start,$rows ");
        $ret['result'] = $query->result();
        return $ret;
    }
	
	    /* Pertanyaan Admin */
    function get_public_quat() {
        $start = 0;
        $rows  = 100;
        $sql = " SELECT * FROM komentar where username<>'Admin'";
        $query = $this->db->query($sql);
        $ret['num_rows'] = $query->num_rows();
        $query = $this->db->query($sql . " ORDER BY tanggal DESC LIMIT $start,$rows");
        $ret['result'] = $query->result();
        return $ret;
    }
	
	function get_tanya_by_id($id) {
        $id = $this->db->escape_str($id);
        $query = $this->db->query(" SELECT * FROM komentar WHERE id = '$id' ");
        return (object)$query->row();
    }
	
	function insert_tanya($tabel,$data,$id_a,$jwb_a) {
        $data = $this->master_model->escape_all($data);
        $this->db->insert($tabel,$data);
        $this->db->query("update komentar set jawaban='$jwb_a' where id='$id_a'");
        return $this->db->affected_rows();
    }
	
	function delete_tanya($id) {
        $id = $this->db->escape_str($id);
        //$this->db->where('id', $id);
        //$this->db->or('id_artikel', $id);
        //$this->db->delete('komentar');
        $this->db->query("delete from komentar where id='$id' or id_artikel='$id'");
        return $this->db->affected_rows();
    }
    
    function get_article_tag(){
        $start = $this->uri->segment(3, 0);
        $rows = 5;
        $keyword = ($this->input->get('cari')) ? $this->input->get('cari') : '';
        // print_r($keyword);
        $_sql_where = array();
        $_sql_where[] = " post_type = 'article' ";
        if (!empty($keyword)) {
            $_sql_where[] = " 
				UCASE(post_tag) LIKE '%" . strtoupper($this->db->escape_str($keyword)) . "%'
			";
        }
        $sql_where = '';
        if (count($_sql_where) > 0) $sql_where = " WHERE " . implode(' AND ', $_sql_where);
        $sql = "SELECT * FROM {$this->posts} P LEFT JOIN {$this->user} U ON (U.uid=P.post_author) $sql_where ";
        $query = $this->db->query($sql);
        $ret['num_rows'] = $query->num_rows();
        $query = $this->db->query($sql . " ORDER BY post_date DESC limit $rows");
        $ret['result'] = $query->result();
        return $ret;
    }
	
	
}
