<?php ?><?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class video_model extends CI_Model {
    function __construct() {
        parent::__construct();
        $this->load->model('master_model');
        // table
        
    }
    
    //ardi
    function upload_video($data)
	{
		$this->db->insert('tb_video',$data);
	}
	
    function get_video_by_id($id) {
        $id = $this->db->escape_str($id);
        $query = $this->db->query(" SELECT * FROM tb_video WHERE video_id = '$id' ");
        return (object)$query->row();
    }
    function insert_video($data) {
        $data = $this->master_model->escape_all($data);
        $this->db->insert('tb_video', $data);
        return $this->db->affected_rows();
    }
    function update_video($data, $id) {
        unset($data['video_id']);
        $this->db->where('video_id', $id);
        $this->db->update('tb_video',$data);
        return $this->db->affected_rows();
    }
    function delete_video($id) {
        $id = $this->db->escape_str($id);
        $this->db->where('video_id', $id);
        $this->db->delete('tb_video');
        return $this->db->affected_rows();
    }
    function get_video() {
        $page = $this->input->post('page') ? $this->input->post('page') : 1;
        $rows = $this->input->post('rows') ? $this->input->post('rows') : 20;
        $sort = $this->input->post('sort') ? $this->input->post('sort') : 'video_id';
        $order = $this->input->post('order') ? $this->input->post('order') : 'desc';
        $keyword = $this->input->post('q') ? $this->input->post('q') : '';
        $offset = ($page - 1) * $rows;
        $_sql_where = array();
        if (!empty($keyword)) {
            $_sql_where[] = " UCASE(title) LIKE '%" . strtoupper($this->db->escape_str($keyword)) . "%' ";
        }
        $sql_where = '';
        if (count($_sql_where) > 0) $sql_where = " WHERE " . implode(' AND ', $_sql_where);
        $sql = " SELECT * FROM tb_video $sql_where ";
        $query = $this->db->query($sql);
        $ret['num_rows'] = $query->num_rows();
        $query = $this->db->query($sql . " ORDER BY date_created DESC ");
        $ret['result'] = $query->result();
        return $ret;
    }
    function get_video_all() {
        $query = $this->db->query(" SELECT * FROM tb_video ORDER BY date_created desc ");
        return $query->result();
    }
    function get_video_select() {
        $tmp = array();
        $res = $this->get_video_all();
        if (count($res) > 0) {
            foreach ($res as $row) {
                $tmp[$row->video_id] = ucfirst($row->title);
            }
        }
        return $tmp;
    }

    
}