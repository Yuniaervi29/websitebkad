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
    // umur

    function get_umur_by_id($id) {
        $id = $this->db->escape_str($id);
        $query = $this->db->query(" SELECT * FROM grafik_umur WHERE no = '$id' ");
        return (object)$query->row();
    }

	 function get_umur() {
        $page = $this->input->post('page') ? $this->input->post('page') : 1;
        $rows = $this->input->post('rows') ? $this->input->post('rows') : 20;
        $sort = $this->input->post('sort') ? $this->input->post('sort') : 'no';
        $order = $this->input->post('order') ? $this->input->post('order') : 'asc';
        $keyword = $this->input->post('q') ? $this->input->post('q') : '';
        $offset = ($page - 1) * $rows;
        $_sql_where = array();
   
        $sql = "
            SELECT * FROM grafik_umur
        ";

      
        $query = $this->db->query($sql);
        $ret['num_rows'] = $query->num_rows();
        $query = $this->db->query($sql . " ORDER BY $sort $order LIMIT $offset,$rows ");
        $ret['result'] = $query->result();
        return $ret;
    }

    function update_umur($data, $id) {
        $id = $this->db->escape_str($id);
        $data = $this->master_model->escape_all($data);
        $this->db->where('no', $id);
        $this->db->update('grafik_umur', $data);
        return $this->db->affected_rows();
    }

    function get_umur_all() {
        $query = $this->db->query("SELECT * FROM grafik_umur ORDER BY no ASC ");
        return $query->result();
    }
    function get_umur_select() {
        $p = $this->get_umur_all();
        $t = array();
        if (count($p) > 0) {
            foreach ($p as $row) {
                $t[$row->no] = $row->no;
            }
        }
        return $t;
    }
    
    // NON ASN
    
	// UNIT

	function get_unitnon_by_id($id) {
        $id = $this->db->escape_str($id);
        $query = $this->db->query(" SELECT * FROM grafik_unit_kerjanon WHERE no = '$id' ");
        return (object)$query->row();
    }

	 function get_unitnon() {
        $page = $this->input->post('page') ? $this->input->post('page') : 1;
        $rows = $this->input->post('rows') ? $this->input->post('rows') : 20;
        $sort = $this->input->post('sort') ? $this->input->post('sort') : 'no';
        $order = $this->input->post('order') ? $this->input->post('order') : 'asc';
        $keyword = $this->input->post('q') ? $this->input->post('q') : '';
        $offset = ($page - 1) * $rows;
        $_sql_where = array();
   
        $sql = "
            SELECT * FROM grafik_unit_kerjanon
        ";

      
        $query = $this->db->query($sql);
        $ret['num_rows'] = $query->num_rows();
        $query = $this->db->query($sql . " ORDER BY $sort $order LIMIT $offset,$rows ");
        $ret['result'] = $query->result();
        return $ret;
    }

    function update_unitnon($data, $id) {
        $id = $this->db->escape_str($id);
        $data = $this->master_model->escape_all($data);
        $this->db->where('no', $id);
        $this->db->update('grafik_unit_kerjanon', $data);
        return $this->db->affected_rows();
    }
    

    function get_unitnon_all() {
        $query = $this->db->query("SELECT * FROM grafik_unit_kerjanon ORDER BY no ASC ");
        return $query->result();
    }
    function get_unitnon_select() {
        $p = $this->get_unitnon_all();
        $t = array();
        if (count($p) > 0) {
            foreach ($p as $row) {
                $t[$row->no] = $row->no;
            }
        }
        return $t;
    }

    // PENDIDIKAN

    function get_pendnon_by_id($id) {
        $id = $this->db->escape_str($id);
        $query = $this->db->query(" SELECT * FROM grafik_pend WHERE no = '$id' ");
        return (object)$query->row();
    }

	 function get_pendnon() {
        $page = $this->input->post('page') ? $this->input->post('page') : 1;
        $rows = $this->input->post('rows') ? $this->input->post('rows') : 20;
        $sort = $this->input->post('sort') ? $this->input->post('sort') : 'no';
        $order = $this->input->post('order') ? $this->input->post('order') : 'asc';
        $keyword = $this->input->post('q') ? $this->input->post('q') : '';
        $offset = ($page - 1) * $rows;
        $_sql_where = array();
   
        $sql = "
            SELECT * FROM grafik_pend_non 
        ";

      
        $query = $this->db->query($sql);
        $ret['num_rows'] = $query->num_rows();
        $query = $this->db->query($sql . " ORDER BY $sort $order LIMIT $offset,$rows ");
        $ret['result'] = $query->result();
        return $ret;
    }

    function update_pendnon($data, $id) {
        $id = $this->db->escape_str($id);
        $data = $this->master_model->escape_all($data);
        $this->db->where('no', $id);
        $this->db->update('grafik_pend_non', $data);
        return $this->db->affected_rows();
    }

    function get_pendnon_all() {
        $query = $this->db->query("SELECT * FROM grafik_pend_non ORDER BY no ASC ");
        return $query->result();
    }
    function get_pendnon_select() {
        $p = $this->get_unitnon_all();
        $t = array();
        if (count($p) > 0) {
            foreach ($p as $row) {
                $t[$row->no] = $row->no;
            }
        }
        return $t;
    }

    // GOLONGAN

      function get_golnon_by_id($id) {
        $id = $this->db->escape_str($id);
        $query = $this->db->query(" SELECT * FROM grafik_gol_non WHERE no = '$id' ");
        return (object)$query->row();
    }

	 function get_golnon() {
        $page = $this->input->post('page') ? $this->input->post('page') : 1;
        $rows = $this->input->post('rows') ? $this->input->post('rows') : 20;
        $sort = $this->input->post('sort') ? $this->input->post('sort') : 'no';
        $order = $this->input->post('order') ? $this->input->post('order') : 'asc';
        $keyword = $this->input->post('q') ? $this->input->post('q') : '';
        $offset = ($page - 1) * $rows;
        $_sql_where = array();
   
        $sql = "
            SELECT * FROM grafik_gol_non 
        ";

      
        $query = $this->db->query($sql);
        $ret['num_rows'] = $query->num_rows();
        $query = $this->db->query($sql . " ORDER BY $sort $order LIMIT $offset,$rows ");
        $ret['result'] = $query->result();
        return $ret;
    }

    function update_golnon($data, $id) {
        $id = $this->db->escape_str($id);
        $data = $this->master_model->escape_all($data);
        $this->db->where('no', $id);
        $this->db->update('grafik_gol_non', $data);
        return $this->db->affected_rows();
    }

    function get_golnon_all() {
        $query = $this->db->query("SELECT * FROM grafik_gol_non ORDER BY no ASC ");
        return $query->result();
    }
    function get_golnon_select() {
        $p = $this->get_golnon_all();
        $t = array();
        if (count($p) > 0) {
            foreach ($p as $row) {
                $t[$row->no] = $row->no;
            }
        }
        return $t;
    }

    // jabatan

    function get_jabnon_by_id($id) {
        $id = $this->db->escape_str($id);
        $query = $this->db->query(" SELECT * FROM grafik_jab_non WHERE no = '$id' ");
        return (object)$query->row();
    }

	 function get_jabnon() {
        $page = $this->input->post('page') ? $this->input->post('page') : 1;
        $rows = $this->input->post('rows') ? $this->input->post('rows') : 20;
        $sort = $this->input->post('sort') ? $this->input->post('sort') : 'no';
        $order = $this->input->post('order') ? $this->input->post('order') : 'asc';
        $keyword = $this->input->post('q') ? $this->input->post('q') : '';
        $offset = ($page - 1) * $rows;
        $_sql_where = array();
   
        $sql = "
            SELECT * FROM grafik_jab_non 
        ";

      
        $query = $this->db->query($sql);
        $ret['num_rows'] = $query->num_rows();
        $query = $this->db->query($sql . " ORDER BY $sort $order LIMIT $offset,$rows ");
        $ret['result'] = $query->result();
        return $ret;
    }

    function update_jabnon($data, $id) {
        $id = $this->db->escape_str($id);
        $data = $this->master_model->escape_all($data);
        $this->db->where('no', $id);
        $this->db->update('grafik_jab_non', $data);
        return $this->db->affected_rows();
    }

    function get_jabnon_all() {
        $query = $this->db->query("SELECT * FROM grafik_jab_non ORDER BY no ASC ");
        return $query->result();
    }
    function get_jabnon_select() {
        $p = $this->get_jabnon_all();
        $t = array();
        if (count($p) > 0) {
            foreach ($p as $row) {
                $t[$row->no] = $row->no;
            }
        }
        return $t;
    }
    // umur

    function get_umurnon_by_id($id) {
        $id = $this->db->escape_str($id);
        $query = $this->db->query(" SELECT * FROM grafik_umur_non WHERE no = '$id' ");
        return (object)$query->row();
    }

	 function get_umurnon() {
        $page = $this->input->post('page') ? $this->input->post('page') : 1;
        $rows = $this->input->post('rows') ? $this->input->post('rows') : 20;
        $sort = $this->input->post('sort') ? $this->input->post('sort') : 'no';
        $order = $this->input->post('order') ? $this->input->post('order') : 'asc';
        $keyword = $this->input->post('q') ? $this->input->post('q') : '';
        $offset = ($page - 1) * $rows;
        $_sql_where = array();
   
        $sql = "
            SELECT * FROM grafik_umur_non
        ";

      
        $query = $this->db->query($sql);
        $ret['num_rows'] = $query->num_rows();
        $query = $this->db->query($sql . " ORDER BY $sort $order LIMIT $offset,$rows ");
        $ret['result'] = $query->result();
        return $ret;
    }

    function update_umurnon($data, $id) {
        $id = $this->db->escape_str($id);
        $data = $this->master_model->escape_all($data);
        $this->db->where('no', $id);
        $this->db->update('grafik_umur_non', $data);
        return $this->db->affected_rows();
    }

    function get_umurnon_all() {
        $query = $this->db->query("SELECT * FROM grafik_umur_non ORDER BY no ASC ");
        return $query->result();
    }
    function get_umurnon_select() {
        $p = $this->get_umurnon_all();
        $t = array();
        if (count($p) > 0) {
            foreach ($p as $row) {
                $t[$row->no] = $row->no;
            }
        }
        return $t;
    }
    // magang

    function get_magang_by_id($id) {
        $id = $this->db->escape_str($id);
        $query = $this->db->query(" SELECT * FROM grafik_umur_non WHERE no = '$id' ");
        return (object)$query->row();
    }

	 function get_magang() {
        $page = $this->input->post('page') ? $this->input->post('page') : 1;
        $rows = $this->input->post('rows') ? $this->input->post('rows') : 20;
        $sort = $this->input->post('sort') ? $this->input->post('sort') : 'no';
        $order = $this->input->post('order') ? $this->input->post('order') : 'asc';
        $keyword = $this->input->post('q') ? $this->input->post('q') : '';
        $offset = ($page - 1) * $rows;
        $_sql_where = array();
   
        $sql = "
            SELECT * FROM grafik_magang
        ";

      
        $query = $this->db->query($sql);
        $ret['num_rows'] = $query->num_rows();
        $query = $this->db->query($sql . " ORDER BY $sort $order LIMIT $offset,$rows ");
        $ret['result'] = $query->result();
        return $ret;
    }

    function update_magang($data, $id) {
        $id = $this->db->escape_str($id);
        $data = $this->master_model->escape_all($data);
        $this->db->where('no', $id);
        $this->db->update('grafik_magang', $data);
        return $this->db->affected_rows();
    }

    function get_magang_all() {
        $query = $this->db->query("SELECT * FROM grafik_magang ORDER BY no ASC ");
        return $query->result();
    }
    function get_magang_select() {
        $p = $this->get_magang_all();
        $t = array();
        if (count($p) > 0) {
            foreach ($p as $row) {
                $t[$row->no] = $row->no;
            }
        }
        return $t;
    }
    
    //keuangan
    
    function get_keuangan_by_id($id) {
        $id = $this->db->escape_str($id);
        $query = $this->db->query(" SELECT * FROM grafik_keuangan WHERE no = '$id' ");
        return (object)$query->row();
    }

	 function get_keuangan() {
        $page = $this->input->post('page') ? $this->input->post('page') : 1;
        $rows = $this->input->post('rows') ? $this->input->post('rows') : 20;
        $sort = $this->input->post('sort') ? $this->input->post('sort') : 'no';
        $order = $this->input->post('order') ? $this->input->post('order') : 'asc';
        $keyword = $this->input->post('q') ? $this->input->post('q') : '';
        $offset = ($page - 1) * $rows;
        $_sql_where = array();
   
        $sql = "
            SELECT * FROM grafik_keuangan
        ";

      
        $query = $this->db->query($sql);
        $ret['num_rows'] = $query->num_rows();
        $query = $this->db->query($sql . " ORDER BY $sort $order LIMIT $offset,$rows ");
        $ret['result'] = $query->result();
        return $ret;
    }

    function update_keuangan($data, $id) {
        $id = $this->db->escape_str($id);
        $data = $this->master_model->escape_all($data);
        $this->db->where('no', $id);
        $this->db->update('grafik_grafik', $data);
        return $this->db->affected_rows();
    }

    function get_keuangan_all() {
        $query = $this->db->query("SELECT * FROM grafik_grafik ORDER BY no ASC ");
        return $query->result();
    }

    function get_keuangan_select() {
        $p = $this->get_keuangan_all();
        $t = array();
        if (count($p) > 0) {
            foreach ($p as $row) {
                $t[$row->no] = $row->no;
            }
        }
        return $t;
    }

}