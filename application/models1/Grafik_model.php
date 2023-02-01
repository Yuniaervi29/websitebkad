<?php
/**
 * 
 */
class Grafik_model extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
        $this->load->model('master_model');
        // table
        $this->master_model->get_tables($this);
	}

	// UNIT

	function get_unit_by_id($id) {
        $id = $this->db->escape_str($id);
        $query = $this->db->query(" SELECT * FROM {$this->grafik_unit_kerja} WHERE no = '$id' ");
        return (object)$query->row();
    }

	 function get_unit() {
        $page = $this->input->post('page') ? $this->input->post('page') : 1;
        $rows = $this->input->post('rows') ? $this->input->post('rows') : 20;
        $sort = $this->input->post('sort') ? $this->input->post('sort') : 'no';
        $order = $this->input->post('order') ? $this->input->post('order') : 'asc';
        $keyword = $this->input->post('q') ? $this->input->post('q') : '';
        $offset = ($page - 1) * $rows;
        $_sql_where = array();
   
        $sql = "
            SELECT * FROM {$this->grafik_unit_kerja} 
        ";

      
        $query = $this->db->query($sql);
        $ret['num_rows'] = $query->num_rows();
        $query = $this->db->query($sql . " ORDER BY $sort $order LIMIT $offset,$rows ");
        $ret['result'] = $query->result();
        return $ret;
    }

    function update_unit($data, $id) {
        $id = $this->db->escape_str($id);
        $data = $this->master_model->escape_all($data);
        $this->db->where('no', $id);
        $this->db->update($this->grafik_unit_kerja, $data);
        return $this->db->affected_rows();
    }

    function get_unit_all() {
        $query = $this->db->query("SELECT * FROM {$this->grafik_unit_kerja} ORDER BY no ASC ");
        return $query->result();
    }
    function get_unit_select() {
        $p = $this->get_unit_all();
        $t = array();
        if (count($p) > 0) {
            foreach ($p as $row) {
                $t[$row->no] = $row->no;
            }
        }
        return $t;
    }

    // PENDIDIKAN

    function get_pend_by_id($id) {
        $id = $this->db->escape_str($id);
        $query = $this->db->query(" SELECT * FROM grafik_pend WHERE no = '$id' ");
        return (object)$query->row();
    }

	 function get_pend() {
        $page = $this->input->post('page') ? $this->input->post('page') : 1;
        $rows = $this->input->post('rows') ? $this->input->post('rows') : 20;
        $sort = $this->input->post('sort') ? $this->input->post('sort') : 'no';
        $order = $this->input->post('order') ? $this->input->post('order') : 'asc';
        $keyword = $this->input->post('q') ? $this->input->post('q') : '';
        $offset = ($page - 1) * $rows;
        $_sql_where = array();
   
        $sql = "
            SELECT * FROM grafik_pend 
        ";

      
        $query = $this->db->query($sql);
        $ret['num_rows'] = $query->num_rows();
        $query = $this->db->query($sql . " ORDER BY $sort $order LIMIT $offset,$rows ");
        $ret['result'] = $query->result();
        return $ret;
    }

    function update_pend($data, $id) {
        $id = $this->db->escape_str($id);
        $data = $this->master_model->escape_all($data);
        $this->db->where('no', $id);
        $this->db->update('grafik_pend', $data);
        return $this->db->affected_rows();
    }

    function get_pend_all() {
        $query = $this->db->query("SELECT * FROM grafik_pend ORDER BY no ASC ");
        return $query->result();
    }
    function get_pend_select() {
        $p = $this->get_unit_all();
        $t = array();
        if (count($p) > 0) {
            foreach ($p as $row) {
                $t[$row->no] = $row->no;
            }
        }
        return $t;
    }

    // GOLONGAN

      function get_gol_by_id($id) {
        $id = $this->db->escape_str($id);
        $query = $this->db->query(" SELECT * FROM grafik_gol WHERE no = '$id' ");
        return (object)$query->row();
    }

	 function get_gol() {
        $page = $this->input->post('page') ? $this->input->post('page') : 1;
        $rows = $this->input->post('rows') ? $this->input->post('rows') : 20;
        $sort = $this->input->post('sort') ? $this->input->post('sort') : 'no';
        $order = $this->input->post('order') ? $this->input->post('order') : 'asc';
        $keyword = $this->input->post('q') ? $this->input->post('q') : '';
        $offset = ($page - 1) * $rows;
        $_sql_where = array();
   
        $sql = "
            SELECT * FROM grafik_gol 
        ";

      
        $query = $this->db->query($sql);
        $ret['num_rows'] = $query->num_rows();
        $query = $this->db->query($sql . " ORDER BY $sort $order LIMIT $offset,$rows ");
        $ret['result'] = $query->result();
        return $ret;
    }

    function update_gol($data, $id) {
        $id = $this->db->escape_str($id);
        $data = $this->master_model->escape_all($data);
        $this->db->where('no', $id);
        $this->db->update('grafik_gol', $data);
        return $this->db->affected_rows();
    }

    function get_gol_all() {
        $query = $this->db->query("SELECT * FROM grafik_gol ORDER BY no ASC ");
        return $query->result();
    }
    function get_gol_select() {
        $p = $this->get_unit_all();
        $t = array();
        if (count($p) > 0) {
            foreach ($p as $row) {
                $t[$row->no] = $row->no;
            }
        }
        return $t;
    }

    // jabatan

    function get_jab_by_id($id) {
        $id = $this->db->escape_str($id);
        $query = $this->db->query(" SELECT * FROM grafik_jab WHERE no = '$id' ");
        return (object)$query->row();
    }

	 function get_jab() {
        $page = $this->input->post('page') ? $this->input->post('page') : 1;
        $rows = $this->input->post('rows') ? $this->input->post('rows') : 20;
        $sort = $this->input->post('sort') ? $this->input->post('sort') : 'no';
        $order = $this->input->post('order') ? $this->input->post('order') : 'asc';
        $keyword = $this->input->post('q') ? $this->input->post('q') : '';
        $offset = ($page - 1) * $rows;
        $_sql_where = array();
   
        $sql = "
            SELECT * FROM grafik_jab 
        ";

      
        $query = $this->db->query($sql);
        $ret['num_rows'] = $query->num_rows();
        $query = $this->db->query($sql . " ORDER BY $sort $order LIMIT $offset,$rows ");
        $ret['result'] = $query->result();
        return $ret;
    }

    function update_jab($data, $id) {
        $id = $this->db->escape_str($id);
        $data = $this->master_model->escape_all($data);
        $this->db->where('no', $id);
        $this->db->update('grafik_jab', $data);
        return $this->db->affected_rows();
    }

    function get_jab_all() {
        $query = $this->db->query("SELECT * FROM grafik_jab ORDER BY no ASC ");
        return $query->result();
    }
    function get_jab_select() {
        $p = $this->get_unit_all();
        $t = array();
        if (count($p) > 0) {
            foreach ($p as $row) {
                $t[$row->no] = $row->no;
            }
        }
        return $t;
    }


}