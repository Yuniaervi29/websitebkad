<?php ?><?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Download_model extends CI_Model {
    function __construct() {
        parent::__construct();
        $this->load->model('master_model');
        // table
        $this->master_model->get_tables($this);
    }
    function get_download_by_id($id) {
        $id = $this->db->escape_str($id);
        $query = $this->db->query(" SELECT * FROM {$this->download} WHERE download_id = '$id' ");
        return (object)$query->row();
    }
    function insert_download($data) {
        $data = $this->master_model->escape_all($data);
        $this->db->insert($this->download, $data);
        return $this->db->affected_rows();
    }
    function update_download($data, $id) {
        $id = $this->db->escape_str($id);
        $data = $this->master_model->escape_all($data);
        $this->db->where('download_id', $id);
        $this->db->update($this->download, $data);
        return $this->db->affected_rows();
    }
    function delete_download($id) {
        $id = $this->db->escape_str($id);
        $this->db->where('download_id', $id);
        $this->db->delete($this->download);
        return $this->db->affected_rows();
    }
    function get_download() {
        $page = $this->input->post('page') ? $this->input->post('page') : 1;
        $rows = $this->input->post('rows') ? $this->input->post('rows') : 2000;
        $sort = $this->input->post('sort') ? $this->input->post('sort') : 'download_id';
        $order = $this->input->post('order') ? $this->input->post('order') : 'desc';
        $keyword = $this->input->post('q') ? $this->input->post('q') : '';
        $offset = ($page - 1) * $rows;
        $_sql_where = array();
        $_sql_where[] = " ((D.category_id BETWEEN 1 AND 100) or (D.category_id BETWEEN 33 AND 150)) ";
        if (!empty($keyword)) {
            $_sql_where[] = " UCASE(name) LIKE '%" . strtoupper($this->db->escape_str($keyword)) . "%' ";
        }
        $sql_where = '';
        if (count($_sql_where) > 0) $sql_where = " WHERE " . implode(' AND ', $_sql_where);
        /*$sql = "
            SELECT * FROM (
            SELECT D.*,B.category FROM {$this->download} D
            INNER JOIN download_category B ON D.category_id=B.category_id)D
            LEFT JOIN {$this->user} U ON (U.uid=D.uid)
            $sql_where
        ";*/

        /*$sql = "
			SELECT * FROM {$this->download} D
			LEFT JOIN {$this->download_category} C ON (C.category_id=D.category_id)
			LEFT JOIN {$this->user} U ON (U.uid=D.uid)
			$sql_where
		";*/
		
		
		/*ardi*/
		$sql ="SELECT a.download_id,b.category_id,a.title,a.date,a.uid,a.file,a.status,a.tahun,b.category,b.jenis FROM {$this->download} a LEFT JOIN {$this->ms_category} b ON a.category_id=b.category_id";
		/*ardi*/
		
        $query = $this->db->query($sql);
        $ret['num_rows'] = $query->num_rows();
        $query = $this->db->query($sql . " ORDER BY $sort $order LIMIT $offset,$rows ");
        $ret['result'] = $query->result();
        return $ret;
    }
    /* public download */
    function get_public_download() {
        $start = $this->uri->segment(3, 0);
        $rows = 500;
        $_sql_where = array();
        $_sql_where[] = " ((category_id BETWEEN 3 AND 100) or (category_id BETWEEN 33 AND 150)) ";
        if (!empty($keyword)) {
            $_sql_where[] = " UCASE(title) LIKE '%" . strtoupper($this->db->escape_str($keyword)) . "%' ";
        }
        $cat = $this->db->escape_str($this->input->get('cat'));
        if (!empty($cat)) {
            $_sql_where[] = " b.category_id='$cat' ";
        }
        $sql_where = '';
        if (count($_sql_where) > 0) $sql_where = " WHERE " . implode(' AND ', $_sql_where);
        /*$sql = " SELECT * FROM {$this->download} D LEFT JOIN {$this->user} U ON (U.uid=D.uid) $sql_where ";*/
        
        /*ardi*/
		$sql ="SELECT a.download_id,b.category_id,a.title,a.date,a.uid,a.file,a.status,a.tahun,b.category,b.jenis FROM {$this->download} a LEFT JOIN {$this->ms_category} b ON a.category_id=b.category_id WHERE a.category_id='$cat'";
		/*ardi*/
		
        $query = $this->db->query($sql);
        $ret['num_rows'] = $query->num_rows();
        $query = $this->db->query($sql . " ORDER BY download_id DESC LIMIT $start,$rows ");
        $ret['result'] = $query->result();
        return $ret;
    }
    function get_latest_download($limit = 5) {
        /*$query = $this->db->query(" SELECT * FROM {$this->download} WHERE status = 'publish' ORDER BY date DESC LIMIT $limit ");
        return $query->result();*/
        
        $query = $this->db->query("SELECT b.category_id,a.title,a.date,a.uid,a.file,a.status,a.tahun,b.category,b.jenis FROM {$this->download} a LEFT JOIN {$this->ms_category} b ON a.category_id=b.category_id
            WHERE a.status = 'publish' ORDER BY date DESC LIMIT $limit ");
        return $query->result();
    }

    /*
    faiz yang buat

    admin undang-undang
     */
    
    function get_undang_undang() {
        $page = $this->input->post('page') ? $this->input->post('page') : 1;
        $rows = $this->input->post('rows') ? $this->input->post('rows') : 20;
        $sort = $this->input->post('sort') ? $this->input->post('sort') : 'download_id';
        $order = $this->input->post('order') ? $this->input->post('order') : 'desc';
        $keyword = $this->input->post('q') ? $this->input->post('q') : '';
        $offset = ($page - 1) * $rows;
        //$_sql_where = array();
        $_sql_where[] = " category = 'Undang Undang' ";
        if (!empty($keyword)) {
            $_sql_where[] = " UCASE(name) LIKE '%" . strtoupper($this->db->escape_str($keyword)) . "%' ";
        }
        $sql_where = '';
        if (count($_sql_where) > 0) $sql_where = " WHERE " . implode(' AND ', $_sql_where);
        /*$sql = "
            SELECT * FROM {$this->download} D
            LEFT JOIN {$this->download_category} C ON (C.category_id=D.category_id)
            LEFT JOIN {$this->user} U ON (U.uid=D.uid)
            $sql_where
        ";*/
        
        /*ardi*/
		$sql ="SELECT a.download_id,b.category_id,a.title,a.date,a.uid,a.file,a.status,a.tahun,b.category,b.jenis FROM {$this->download} a LEFT JOIN {$this->ms_category} b ON a.category_id=b.category_id WHERE a.category_id='$cat'";
		/*ardi*/
		
        $query = $this->db->query($sql);
        $ret['num_rows'] = $query->num_rows();
        $query = $this->db->query($sql . " ORDER BY $sort $order LIMIT $offset,$rows ");
        $ret['result'] = $query->result();
        return $ret;
    }
    /* public undang-undang */
    function get_public_undang_undang() {
        $start = $this->uri->segment(3, 0);
        $rows = 500;
        $_sql_where = array();
        $_sql_where[] = " b.category_id = '24' ";
        if (!empty($keyword)) {
            $_sql_where[] = " UCASE(title) LIKE '%" . strtoupper($this->db->escape_str($keyword)) . "%' ";
        }
        $cat = $this->db->escape_str($this->input->get('cat'));
        if (!empty($cat)) {
            $_sql_where[] = " b.category_id='$cat' ";
        }
        $sql_where = '';
        if (count($_sql_where) > 0) $sql_where = " WHERE " . implode(' AND ', $_sql_where);
        
        /*$sql = " SELECT * FROM {$this->download} D LEFT JOIN {$this->user} U ON (U.uid=D.uid) $sql_where ";*/
        
        /*ardi*/
		$sql ="SELECT a.download_id,b.category_id,a.title,a.date,a.uid,a.file,a.status,a.tahun,b.category,b.jenis FROM {$this->download} a LEFT JOIN {$this->ms_category} b ON a.category_id=b.category_id WHERE b.jenis='UNDANG_UNDANG'";
		/*ardi*/
        
        $query = $this->db->query($sql);
        $ret['num_rows'] = $query->num_rows();
        $query = $this->db->query($sql . " ORDER BY a.date DESC LIMIT $start,$rows ");
        $ret['result'] = $query->result();
        return $ret;
    }
    
    /* ardi- informasi berkala */
    function get_informasi_berkala() {
        $start = $this->uri->segment(3, 0);
        $rows = 500;
        $_sql_where = array();
        $_sql_where[] = " b.category_id = '24' ";
        if (!empty($keyword)) {
            $_sql_where[] = " UCASE(title) LIKE '%" . strtoupper($this->db->escape_str($keyword)) . "%' ";
        }
        $cat = $this->db->escape_str($this->input->get('cat'));
        if (!empty($cat)) {
            $_sql_where[] = " b.category_id='$cat' ";
        }
        $sql_where = '';
        if (count($_sql_where) > 0) $sql_where = " WHERE " . implode(' AND ', $_sql_where);
        
        /*$sql = " SELECT * FROM {$this->download} D LEFT JOIN {$this->user} U ON (U.uid=D.uid) $sql_where ";*/
        
        /*ardi*/
		$sql ="SELECT a.download_id,b.category_id,a.title,a.date,a.uid,a.file,a.status,a.tahun,b.category,a.jenis FROM {$this->download} a LEFT JOIN {$this->ms_category} b ON a.category_id=b.category_id WHERE a.jenis='berkala'";
		/*ardi*/
        
        $query = $this->db->query($sql);
        $ret['num_rows'] = $query->num_rows();
        $query = $this->db->query($sql . " ORDER BY a.date DESC LIMIT $start,$rows ");
        $ret['result'] = $query->result();
        return $ret;
    }
    /* ardi- informasi setiap saat */
    function get_informasi_setiap_saat() {
        $start = $this->uri->segment(3, 0);
        $rows =500;
        $_sql_where = array();
        $_sql_where[] = " b.category_id = '24' ";
        if (!empty($keyword)) {
            $_sql_where[] = " UCASE(title) LIKE '%" . strtoupper($this->db->escape_str($keyword)) . "%' ";
        }
        $cat = $this->db->escape_str($this->input->get('cat'));
        if (!empty($cat)) {
            $_sql_where[] = " b.category_id='$cat' ";
        }
        $sql_where = '';
        if (count($_sql_where) > 0) $sql_where = " WHERE " . implode(' AND ', $_sql_where);
        
        /*$sql = " SELECT * FROM {$this->download} D LEFT JOIN {$this->user} U ON (U.uid=D.uid) $sql_where ";*/
        
        /*ardi*/
		$sql ="SELECT a.download_id,b.category_id,a.title,a.date,a.uid,a.file,a.status,a.tahun,b.category,a.jenis FROM {$this->download} a LEFT JOIN {$this->ms_category} b ON a.category_id=b.category_id WHERE a.jenis='setiap_saat'";
		/*ardi*/
        
        $query = $this->db->query($sql);
        $ret['num_rows'] = $query->num_rows();
        $query = $this->db->query($sql . " ORDER BY a.date DESC LIMIT $start,$rows ");
        $ret['result'] = $query->result();
        return $ret;
    }
    /* ardi- informasi serta merta */
    function get_informasi_serta_merta() {
        $start = $this->uri->segment(3, 0);
        $rows = 500;
        $_sql_where = array();
        $_sql_where[] = " b.category_id = '24' ";
        if (!empty($keyword)) {
            $_sql_where[] = " UCASE(title) LIKE '%" . strtoupper($this->db->escape_str($keyword)) . "%' ";
        }
        $cat = $this->db->escape_str($this->input->get('cat'));
        if (!empty($cat)) {
            $_sql_where[] = " b.category_id='$cat' ";
        }
        $sql_where = '';
        if (count($_sql_where) > 0) $sql_where = " WHERE " . implode(' AND ', $_sql_where);
        
        /*$sql = " SELECT * FROM {$this->download} D LEFT JOIN {$this->user} U ON (U.uid=D.uid) $sql_where ";*/
        
        /*ardi*/
		$sql ="SELECT a.download_id,b.category_id,a.title,a.date,a.uid,a.file,a.status,a.tahun,b.category,a.jenis FROM {$this->download} a LEFT JOIN {$this->ms_category} b ON a.category_id=b.category_id WHERE a.jenis='serta_merta'";
		/*ardi*/
        
        $query = $this->db->query($sql);
        $ret['num_rows'] = $query->num_rows();
        $query = $this->db->query($sql . " ORDER BY a.date DESC LIMIT $start,$rows ");
        $ret['result'] = $query->result();
        return $ret;
    }
    
    function get_latest_undang_undang($limit = 5) {
        /*$query = $this->db->query(" SELECT * FROM {$this->download} WHERE status = 'publish' ORDER BY date DESC LIMIT $limit ");
        return $query->result();*/
        
        $query = $this->db->query("SELECT b.category_id,a.title,a.date,a.uid,a.file,a.status,a.tahun,b.category,b.jenis FROM {$this->download} a LEFT JOIN {$this->ms_category} b ON a.category_id=b.category_id
            WHERE a.status = 'publish' ORDER BY date DESC LIMIT $limit ");
        return $query->result();
    }

    /*
    faiz yang buat

    admin peraturan pemerintah
     */
    
    function get_peraturan_pemerintah() {
        $page = $this->input->post('page') ? $this->input->post('page') : 1;
        $rows = $this->input->post('rows') ? $this->input->post('rows') : 20;
        $sort = $this->input->post('sort') ? $this->input->post('sort') : 'download_id';
        $order = $this->input->post('order') ? $this->input->post('order') : 'desc';
        $keyword = $this->input->post('q') ? $this->input->post('q') : '';
        $offset = ($page - 1) * $rows;
        $_sql_where = array();
        $_sql_where[] = " category = 'Peraturan Pemerintah' ";
        if (!empty($keyword)) {
            $_sql_where[] = " UCASE(name) LIKE '%" . strtoupper($this->db->escape_str($keyword)) . "%' ";
        }
        $sql_where = '';
        if (count($_sql_where) > 0) $sql_where = " WHERE " . implode(' AND ', $_sql_where);
        /*$sql = "
            SELECT * FROM {$this->download} D
            LEFT JOIN {$this->download_category} C ON (C.category_id=D.category_id)
            LEFT JOIN {$this->user} U ON (U.uid=D.uid)
            $sql_where
        ";*/
        
        /*ardi*/
		$sql ="SELECT a.download_id,b.category_id,a.title,a.date,a.uid,a.file,a.status,a.tahun,b.category,b.jenis FROM {$this->download} a LEFT JOIN {$this->ms_category} b ON a.category_id=b.category_id WHERE a.category_id='$cat'";
		/*ardi*/
		
        $query = $this->db->query($sql);
        $ret['num_rows'] = $query->num_rows();
        $query = $this->db->query($sql . " ORDER BY $sort $order LIMIT $offset,$rows ");
        $ret['result'] = $query->result();
        return $ret;
    }
    /* public peraturan pemerintah*/
    function get_public_peraturan_pemerintah() {
        $start = $this->uri->segment(3, 0);
        $rows = 100;
        $_sql_where = array();
        $_sql_where[] = " category_id = '25' ";
        if (!empty($keyword)) {
            $_sql_where[] = " UCASE(title) LIKE '%" . strtoupper($this->db->escape_str($keyword)) . "%' ";
        }
        $cat = $this->db->escape_str($this->input->get('cat'));
        if (!empty($cat)) {
            $_sql_where[] = " b.category_id='$cat' ";
        }
        $sql_where = '';
        if (count($_sql_where) > 0) $sql_where = " WHERE " . implode(' AND ', $_sql_where);
        /*$sql = " SELECT * FROM {$this->download} D LEFT JOIN {$this->user} U ON (U.uid=D.uid) $sql_where ";*/
        
        /*ardi*/
		$sql ="SELECT a.download_id,b.category_id,a.title,a.date,a.uid,a.file,a.status,a.tahun,b.category,b.jenis FROM {$this->download} a LEFT JOIN {$this->ms_category} b ON a.category_id=b.category_id WHERE b.jenis='PERATURAN_PEMERINTAH' ";
		/*ardi*/
		
        $query = $this->db->query($sql);
        $ret['num_rows'] = $query->num_rows();
        $query = $this->db->query($sql . " ORDER BY date DESC LIMIT $start,$rows ");
        $ret['result'] = $query->result();
        return $ret;
    }
    function get_latest_peraturan_pemerintah($limit = 5) {
        /*$query = $this->db->query(" SELECT * FROM {$this->download} WHERE status = 'publish' ORDER BY date DESC LIMIT $limit ");
        return $query->result();*/
        
        $query = $this->db->query("SELECT b.category_id,a.title,a.date,a.uid,a.file,a.status,a.tahun,b.category,b.jenis FROM {$this->download} a LEFT JOIN {$this->ms_category} b ON a.category_id=b.category_id
            WHERE a.status = 'publish' ORDER BY date DESC LIMIT $limit ");
        return $query->result();
    }

    /*
    faiz yang buat

    admin peraturan presiden
     */
    
    function get_peraturan_presiden() {
        $page = $this->input->post('page') ? $this->input->post('page') : 1;
        $rows = $this->input->post('rows') ? $this->input->post('rows') : 20;
        $sort = $this->input->post('sort') ? $this->input->post('sort') : 'download_id';
        $order = $this->input->post('order') ? $this->input->post('order') : 'desc';
        $keyword = $this->input->post('q') ? $this->input->post('q') : '';
        $offset = ($page - 1) * $rows;
        $_sql_where = array();
        $_sql_where[] = " category = 'Peraturan Presiden' ";
        if (!empty($keyword)) {
            $_sql_where[] = " UCASE(name) LIKE '%" . strtoupper($this->db->escape_str($keyword)) . "%' ";
        }
        $sql_where = '';
        if (count($_sql_where) > 0) $sql_where = " WHERE " . implode(' AND ', $_sql_where);
        /*$sql = "
            SELECT * FROM {$this->download} D
            LEFT JOIN {$this->download_category} C ON (C.category_id=D.category_id)
            LEFT JOIN {$this->user} U ON (U.uid=D.uid)
            $sql_where
        ";*/
        
        /*ardi*/
		$sql ="SELECT a.download_id,b.category_id,a.title,a.date,a.uid,a.file,a.status,a.tahun,b.category,b.jenis FROM {$this->download} a LEFT JOIN {$this->ms_category} b ON a.category_id=b.category_id WHERE a.category_id='$cat'";
		/*ardi*/
		
        $query = $this->db->query($sql);
        $ret['num_rows'] = $query->num_rows();
        $query = $this->db->query($sql . " ORDER BY $sort $order LIMIT $offset,$rows ");
        $ret['result'] = $query->result();
        return $ret;
    }
    /* public peraturan pemerintah*/
    function get_public_peraturan_presiden() {
        $start = $this->uri->segment(3, 0);
        $rows = 100;
        $_sql_where = array();
        $_sql_where[] = " category_id = '26' ";
        if (!empty($keyword)) {
            $_sql_where[] = " UCASE(title) LIKE '%" . strtoupper($this->db->escape_str($keyword)) . "%' ";
        }
        $cat = $this->db->escape_str($this->input->get('cat'));
        if (!empty($cat)) {
            $_sql_where[] = " b.category_id='$cat' ";
        }
        $sql_where = '';
        if (count($_sql_where) > 0) $sql_where = " WHERE " . implode(' AND ', $_sql_where);
        /*$sql = " SELECT * FROM {$this->download} D LEFT JOIN {$this->user} U ON (U.uid=D.uid) $sql_where ";*/
        
        /*ardi*/
		$sql ="SELECT a.download_id,b.category_id,a.title,a.date,a.uid,a.file,a.status,a.tahun,b.category,b.jenis FROM {$this->download} a LEFT JOIN {$this->ms_category} b ON a.category_id=b.category_id WHERE b.jenis='PERATURAN_PRESIDEN'";
		/*ardi*/
		
        $query = $this->db->query($sql);
        $ret['num_rows'] = $query->num_rows();
        $query = $this->db->query($sql . " ORDER BY date DESC LIMIT $start,$rows ");
        $ret['result'] = $query->result();
        return $ret;
    }
    function get_latest_peraturan_presiden($limit = 5) {
        /*$query = $this->db->query(" SELECT * FROM {$this->download} WHERE status = 'publish' ORDER BY date DESC LIMIT $limit ");
        return $query->result();*/
        
        $query = $this->db->query("SELECT b.category_id,a.title,a.date,a.uid,a.file,a.status,a.tahun,b.category,b.jenis FROM {$this->download} a LEFT JOIN {$this->ms_category} b ON a.category_id=b.category_id
            WHERE a.status = 'publish' ORDER BY date DESC LIMIT $limit ");
        return $query->result();
    }


    /*
    faiz yang buat

    admin peraturan menteri
     */
    
    function get_peraturan_menteri() {
        $page = $this->input->post('page') ? $this->input->post('page') : 1;
        $rows = $this->input->post('rows') ? $this->input->post('rows') : 20;
        $sort = $this->input->post('sort') ? $this->input->post('sort') : 'download_id';
        $order = $this->input->post('order') ? $this->input->post('order') : 'desc';
        $keyword = $this->input->post('q') ? $this->input->post('q') : '';
        $offset = ($page - 1) * $rows;
        $_sql_where = array();
        $_sql_where[] = " category = 'Peraturan Menteri' ";
        if (!empty($keyword)) {
            $_sql_where[] = " UCASE(name) LIKE '%" . strtoupper($this->db->escape_str($keyword)) . "%' ";
        }
        $sql_where = '';
        if (count($_sql_where) > 0) $sql_where = " WHERE " . implode(' AND ', $_sql_where);
        /*$sql = "
            SELECT * FROM {$this->download} D
            LEFT JOIN {$this->download_category} C ON (C.category_id=D.category_id)
            LEFT JOIN {$this->user} U ON (U.uid=D.uid)
            $sql_where
        ";*/
        
        /*ardi*/
		$sql ="SELECT a.download_id,b.category_id,a.title,a.date,a.uid,a.file,a.status,a.tahun,b.category,b.jenis FROM {$this->download} a LEFT JOIN {$this->ms_category} b ON a.category_id=b.category_id WHERE a.category_id='$cat'";
		/*ardi*/
		
        $query = $this->db->query($sql);
        $ret['num_rows'] = $query->num_rows();
        $query = $this->db->query($sql . " ORDER BY $sort $order LIMIT $offset,$rows ");
        $ret['result'] = $query->result();
        return $ret;
    }
    /* public peraturan menteri*/
    function get_public_peraturan_menteri() {
        $start = $this->uri->segment(3, 0);
        $rows = 100;
        $_sql_where = array();
        $_sql_where[] = " category_id = '27' ";
        if (!empty($keyword)) {
            $_sql_where[] = " UCASE(title) LIKE '%" . strtoupper($this->db->escape_str($keyword)) . "%' ";
        }
        $cat = $this->db->escape_str($this->input->get('cat'));
        if (!empty($cat)) {
            $_sql_where[] = " b.category_id='$cat' ";
        }
        $sql_where = '';
        if (count($_sql_where) > 0) $sql_where = " WHERE " . implode(' AND ', $_sql_where);
        /*$sql = " SELECT * FROM {$this->download} D LEFT JOIN {$this->user} U ON (U.uid=D.uid) $sql_where ";*/
        
        /*ardi*/
		$sql ="SELECT a.download_id,b.category_id,a.title,a.date,a.uid,a.file,a.status,a.tahun,b.category,b.jenis FROM {$this->download} a LEFT JOIN {$this->ms_category} b ON a.category_id=b.category_id WHERE b.jenis='PERATURAN_MENTERI'";
		/*ardi*/
		
        $query = $this->db->query($sql);
        $ret['num_rows'] = $query->num_rows();
        $query = $this->db->query($sql . " ORDER BY date DESC LIMIT $start,$rows ");
        $ret['result'] = $query->result();
        return $ret;
    }
    function get_latest_peraturan_menteri($limit = 5) {
        /*$query = $this->db->query(" SELECT * FROM {$this->download} WHERE status = 'publish' ORDER BY date DESC LIMIT $limit ");
        return $query->result();*/
        
        $query = $this->db->query("SELECT b.category_id,a.title,a.date,a.uid,a.file,a.status,a.tahun,b.category,b.jenis FROM {$this->download} a LEFT JOIN {$this->ms_category} b ON a.category_id=b.category_id
            WHERE a.status = 'publish' ORDER BY date DESC LIMIT $limit ");
        return $query->result();
    }


    /*
    faiz yang buat

    admin peraturan daerah
     */
    
    function get_peraturan_daerah() {
        $page = $this->input->post('page') ? $this->input->post('page') : 1;
        $rows = $this->input->post('rows') ? $this->input->post('rows') : 20;
        $sort = $this->input->post('sort') ? $this->input->post('sort') : 'download_id';
        $order = $this->input->post('order') ? $this->input->post('order') : 'desc';
        $keyword = $this->input->post('q') ? $this->input->post('q') : '';
        $offset = ($page - 1) * $rows;
        $_sql_where = array();
        $_sql_where[] = " category = 'Peraturan Daerah' ";
        if (!empty($keyword)) {
            $_sql_where[] = " UCASE(name) LIKE '%" . strtoupper($this->db->escape_str($keyword)) . "%' ";
        }
        $sql_where = '';
        if (count($_sql_where) > 0) $sql_where = " WHERE " . implode(' AND ', $_sql_where);
        /*$sql = "
            SELECT * FROM {$this->download} D
            LEFT JOIN {$this->download_category} C ON (C.category_id=D.category_id)
            LEFT JOIN {$this->user} U ON (U.uid=D.uid)
            $sql_where
        ";*/
        
        /*ardi*/
		$sql ="SELECT a.download_id,b.category_id,a.title,a.date,a.uid,a.file,a.status,a.tahun,b.category,b.jenis FROM {$this->download} a LEFT JOIN {$this->ms_category} b ON a.category_id=b.category_id WHERE a.category_id='$cat'";
		/*ardi*/
		
        $query = $this->db->query($sql);
        $ret['num_rows'] = $query->num_rows();
        $query = $this->db->query($sql . " ORDER BY $sort $order LIMIT $offset,$rows ");
        $ret['result'] = $query->result();
        return $ret;
    }
    /* public peraturan daerah*/
    function get_public_peraturan_daerah() {
        $start = $this->uri->segment(3, 0);
        $rows = 100;
        $_sql_where = array();
        $_sql_where[] = " category_id = '28' ";
        if (!empty($keyword)) {
            $_sql_where[] = " UCASE(title) LIKE '%" . strtoupper($this->db->escape_str($keyword)) . "%' ";
        }
        $cat = $this->db->escape_str($this->input->get('cat'));
        if (!empty($cat)) {
            $_sql_where[] = " b.category_id='$cat' ";
        }
        $sql_where = '';
        if (count($_sql_where) > 0) $sql_where = " WHERE " . implode(' AND ', $_sql_where);
        /*$sql = " SELECT * FROM {$this->download} D LEFT JOIN {$this->user} U ON (U.uid=D.uid) $sql_where ";*/
        
        /*ardi*/
		$sql ="SELECT a.download_id,b.category_id,a.title,a.date,a.uid,a.file,a.status,a.tahun,b.category,b.jenis FROM {$this->download} a LEFT JOIN {$this->ms_category} b ON a.category_id=b.category_id WHERE b.jenis='PERATURAN_DAERAH'";
		/*ardi*/
		
        $query = $this->db->query($sql);
        $ret['num_rows'] = $query->num_rows();
        $query = $this->db->query($sql . " ORDER BY date DESC LIMIT $start,$rows ");
        $ret['result'] = $query->result();
        return $ret;
    }
    function get_latest_peraturan_daerah($limit = 5) {
        /*$query = $this->db->query(" SELECT * FROM {$this->download} WHERE status = 'publish' ORDER BY date DESC LIMIT $limit ");
        return $query->result();*/
        
        $query = $this->db->query("SELECT b.category_id,a.title,a.date,a.uid,a.file,a.status,a.tahun,b.category,b.jenis FROM {$this->download} a LEFT JOIN {$this->ms_category} b ON a.category_id=b.category_id
            WHERE a.status = 'publish' ORDER BY date DESC LIMIT $limit ");
        return $query->result();
    }


    /*
    faiz yang buat

    adminperaturan gubernur
     */
    
    function get_peraturan_gubernur() {
        $page = $this->input->post('page') ? $this->input->post('page') : 1;
        $rows = $this->input->post('rows') ? $this->input->post('rows') : 20;
        $sort = $this->input->post('sort') ? $this->input->post('sort') : 'download_id';
        $order = $this->input->post('order') ? $this->input->post('order') : 'desc';
        $keyword = $this->input->post('q') ? $this->input->post('q') : '';
        $offset = ($page - 1) * $rows;
        $_sql_where = array();
        $_sql_where[] = " category = 'Peraturan Gubernur' ";
        if (!empty($keyword)) {
            $_sql_where[] = " UCASE(name) LIKE '%" . strtoupper($this->db->escape_str($keyword)) . "%' ";
        }
        $sql_where = '';
        if (count($_sql_where) > 0) $sql_where = " WHERE " . implode(' AND ', $_sql_where);
        /*$sql = "
            SELECT * FROM {$this->download} D
            LEFT JOIN {$this->download_category} C ON (C.category_id=D.category_id)
            LEFT JOIN {$this->user} U ON (U.uid=D.uid)
            $sql_where
        ";*/
        
        /*ardi*/
		$sql ="SELECT a.download_id,b.category_id,a.title,a.date,a.uid,a.file,a.status,a.tahun,b.category,b.jenis FROM {$this->download} a LEFT JOIN {$this->ms_category} b ON a.category_id=b.category_id WHERE a.category_id='$cat'";
		/*ardi*/
		
        $query = $this->db->query($sql);
        $ret['num_rows'] = $query->num_rows();
        $query = $this->db->query($sql . " ORDER BY $sort $order LIMIT $offset,$rows ");
        $ret['result'] = $query->result();
        return $ret;
    }
    /* public peraturan daerah*/
    function get_public_peraturan_gubernur() {
        $start = $this->uri->segment(3, 0);
        $rows = 100;
        $_sql_where = array();
        $_sql_where[] = " category_id = '29' ";
        if (!empty($keyword)) {
            $_sql_where[] = " UCASE(title) LIKE '%" . strtoupper($this->db->escape_str($keyword)) . "%' ";
        }
        $cat = $this->db->escape_str($this->input->get('cat'));
        if (!empty($cat)) {
            $_sql_where[] = " b.category_id='$cat' ";
        }
        $sql_where = '';
        if (count($_sql_where) > 0) $sql_where = " WHERE " . implode(' AND ', $_sql_where);
        /*$sql = " SELECT * FROM {$this->download} D LEFT JOIN {$this->user} U ON (U.uid=D.uid) $sql_where ";*/
        
        /*ardi*/
		$sql ="SELECT a.download_id,b.category_id,a.title,a.date,a.uid,a.file,a.status,a.tahun,b.category,b.jenis FROM {$this->download} a LEFT JOIN {$this->ms_category} b ON a.category_id=b.category_id WHERE b.jenis='PERATURAN_GUBERNUR'";
		/*ardi*/
		
        $query = $this->db->query($sql);
        $ret['num_rows'] = $query->num_rows();
        $query = $this->db->query($sql . " ORDER BY date DESC LIMIT $start,$rows ");
        $ret['result'] = $query->result();
        return $ret;
    }
    function get_latest_peraturan_gubernur($limit = 5) {
        /*$query = $this->db->query(" SELECT * FROM {$this->download} WHERE status = 'publish' ORDER BY date DESC LIMIT $limit ");
        return $query->result();*/
        
        $query = $this->db->query("SELECT b.category_id,a.title,a.date,a.uid,a.file,a.status,a.tahun,b.category,b.jenis FROM {$this->download} a LEFT JOIN {$this->ms_category} b ON a.category_id=b.category_id
            WHERE a.status = 'publish' ORDER BY date DESC LIMIT $limit ");
        return $query->result();
    }


    /*
    faiz yang buat

    admin keputusan gubernur
     */
    
    function get_keputusan_gubernur() {
        $page = $this->input->post('page') ? $this->input->post('page') : 1;
        $rows = $this->input->post('rows') ? $this->input->post('rows') : 20;
        $sort = $this->input->post('sort') ? $this->input->post('sort') : 'download_id';
        $order = $this->input->post('order') ? $this->input->post('order') : 'desc';
        $keyword = $this->input->post('q') ? $this->input->post('q') : '';
        $offset = ($page - 1) * $rows;
        $_sql_where = array();
        $_sql_where[] = " category = 'Keputusan Gubernur' ";
        if (!empty($keyword)) {
            $_sql_where[] = " UCASE(name) LIKE '%" . strtoupper($this->db->escape_str($keyword)) . "%' ";
        }
        $sql_where = '';
        if (count($_sql_where) > 0) $sql_where = " WHERE " . implode(' AND ', $_sql_where);
        /*$sql = "
            SELECT * FROM {$this->download} D
            LEFT JOIN {$this->download_category} C ON (C.category_id=D.category_id)
            LEFT JOIN {$this->user} U ON (U.uid=D.uid)
            $sql_where
        ";*/
        
        /*ardi*/
		$sql ="SELECT a.download_id,b.category_id,a.title,a.date,a.uid,a.file,a.status,a.tahun,b.category,b.jenis FROM {$this->download} a LEFT JOIN {$this->ms_category} b ON a.category_id=b.category_id WHERE a.category_id='$cat'";
		/*ardi*/
		
		
        $query = $this->db->query($sql);
        $ret['num_rows'] = $query->num_rows();
        $query = $this->db->query($sql . " ORDER BY $sort $order LIMIT $offset,$rows ");
        $ret['result'] = $query->result();
        return $ret;
    }
    /* public keputusan gubernur*/
    function get_public_keputusan_gubernur() {
        $start = $this->uri->segment(3, 0);
        $rows = 100;
        $_sql_where = array();
        $_sql_where[] = " category_id = '30' ";
        if (!empty($keyword)) {
            $_sql_where[] = " UCASE(title) LIKE '%" . strtoupper($this->db->escape_str($keyword)) . "%' ";
        }
        $cat = $this->db->escape_str($this->input->get('cat'));
        if (!empty($cat)) {
            $_sql_where[] = " b.category_id='$cat' ";
        }
        $sql_where = '';
        if (count($_sql_where) > 0) $sql_where = " WHERE " . implode(' AND ', $_sql_where);
        /*$sql = " SELECT * FROM {$this->download} D LEFT JOIN {$this->user} U ON (U.uid=D.uid) $sql_where ";*/
        
        /*ardi*/
		$sql ="SELECT a.download_id,b.category_id,a.title,a.date,a.uid,a.file,a.status,a.tahun,b.category,b.jenis FROM {$this->download} a LEFT JOIN {$this->ms_category} b ON a.category_id=b.category_id WHERE b.jenis='KEPUTUSAN_GUBERNUR'";
		/*ardi*/
		
        $query = $this->db->query($sql);
        $ret['num_rows'] = $query->num_rows();
        $query = $this->db->query($sql . " ORDER BY date DESC LIMIT $start,$rows ");
        $ret['result'] = $query->result();
        return $ret;
    }
    
    function get_latest_keputusan_gubernur($limit = 5) {
        /*$query = $this->db->query(" SELECT * FROM {$this->download} WHERE status = 'publish' ORDER BY date DESC LIMIT $limit ");
        return $query->result();*/
        
        $query = $this->db->query("SELECT b.category_id,a.title,a.date,a.uid,a.file,a.status,a.tahun,b.category,b.jenis FROM {$this->download} a LEFT JOIN {$this->ms_category} b ON a.category_id=b.category_id
            WHERE a.status = 'publish' ORDER BY date DESC LIMIT $limit ");
        return $query->result();
    }


    /*
    faiz yang buat

    admin isntruksi gubernur
     */
    
    function get_instruksi_gubernur() {
        $page = $this->input->post('page') ? $this->input->post('page') : 1;
        $rows = $this->input->post('rows') ? $this->input->post('rows') : 20;
        $sort = $this->input->post('sort') ? $this->input->post('sort') : 'download_id';
        $order = $this->input->post('order') ? $this->input->post('order') : 'desc';
        $keyword = $this->input->post('q') ? $this->input->post('q') : '';
        $offset = ($page - 1) * $rows;
        $_sql_where = array();
        $_sql_where[] = " category = 'INTRUKSI GUBERNUR' ";
        if (!empty($keyword)) {
            $_sql_where[] = " UCASE(name) LIKE '%" . strtoupper($this->db->escape_str($keyword)) . "%' ";
        }
        $sql_where = '';
        if (count($_sql_where) > 0) $sql_where = " WHERE " . implode(' AND ', $_sql_where);
        /*$sql = "
            SELECT * FROM {$this->download} D
            LEFT JOIN {$this->download_category} C ON (C.category_id=D.category_id)
            LEFT JOIN {$this->user} U ON (U.uid=D.uid)
            $sql_where
        ";*/
        
        /*ardi*/
		$sql ="SELECT a.download_id,b.category_id,a.title,a.date,a.uid,a.file,a.status,a.tahun,b.category,b.jenis FROM {$this->download} a LEFT JOIN {$this->ms_category} b ON a.category_id=b.category_id WHERE a.category_id='$cat'";
		/*ardi*/
		
        $query = $this->db->query($sql);
        $ret['num_rows'] = $query->num_rows();
        $query = $this->db->query($sql . " ORDER BY $sort $order LIMIT $offset,$rows ");
        $ret['result'] = $query->result();
        return $ret;
    }
    /* public instruksi gubernur*/
    function get_public_instruksi_gubernur() {
        $start = $this->uri->segment(3, 0);
        $rows = 100;
        $_sql_where = array();
        $_sql_where[] = " category_id = '31' ";
        if (!empty($keyword)) {
            $_sql_where[] = " UCASE(title) LIKE '%" . strtoupper($this->db->escape_str($keyword)) . "%' ";
        }
        $cat = $this->db->escape_str($this->input->get('cat'));
        if (!empty($cat)) {
            $_sql_where[] = " b.category_id='$cat' ";
        }
        $sql_where = '';
        if (count($_sql_where) > 0) $sql_where = " WHERE " . implode(' AND ', $_sql_where);
        /*$sql = " SELECT * FROM {$this->download} D LEFT JOIN {$this->user} U ON (U.uid=D.uid) $sql_where ";*/
        
        /*ardi*/
		$sql ="SELECT a.download_id,b.category_id,a.title,a.date,a.uid,a.file,a.status,a.tahun,b.category,b.jenis FROM {$this->download} a LEFT JOIN {$this->ms_category} b ON a.category_id=b.category_id WHERE b.jenis='INTRUKSI_GUBERNUR'";
		/*ardi*/
		
        $query = $this->db->query($sql);
        $ret['num_rows'] = $query->num_rows();
        $query = $this->db->query($sql . " ORDER BY download_id DESC LIMIT $start,$rows ");
        $ret['result'] = $query->result();
        return $ret;
    }
    function get_latest_instruksi_gubernur($limit = 5) {
        /*$query = $this->db->query(" SELECT * FROM {$this->download} WHERE status = 'publish' ORDER BY date DESC LIMIT $limit ");
        return $query->result();*/
        
        $query = $this->db->query("SELECT b.category_id,a.title,a.date,a.uid,a.file,a.status,a.tahun,b.category,b.jenis FROM {$this->download} a LEFT JOIN {$this->ms_category} b ON a.category_id=b.category_id
            WHERE a.status = 'publish' ORDER BY date DESC LIMIT $limit ");
        return $query->result();
    }


    /*
    faiz yang buat

    admin surat edaran bpkd
     */
    
    function get_surat_edaran_bpkd() {
        $page = $this->input->post('page') ? $this->input->post('page') : 1;
        $rows = $this->input->post('rows') ? $this->input->post('rows') : 20;
        $sort = $this->input->post('sort') ? $this->input->post('sort') : 'download_id';
        $order = $this->input->post('order') ? $this->input->post('order') : 'desc';
        $keyword = $this->input->post('q') ? $this->input->post('q') : '';
        $offset = ($page - 1) * $rows;
        $_sql_where = array();
        $_sql_where[] = " category = 'Surat Edaran BPKD' ";
        if (!empty($keyword)) {
            $_sql_where[] = " UCASE(name) LIKE '%" . strtoupper($this->db->escape_str($keyword)) . "%' ";
        }
        $sql_where = '';
        if (count($_sql_where) > 0) $sql_where = " WHERE " . implode(' AND ', $_sql_where);
        /*$sql = "
            SELECT * FROM {$this->download} D
            LEFT JOIN {$this->download_category} C ON (C.category_id=D.category_id)
            LEFT JOIN {$this->user} U ON (U.uid=D.uid)
            $sql_where
        ";*/
        
        /*ardi*/
		$sql ="SELECT a.download_id,b.category_id,a.title,a.date,a.uid,a.file,a.status,a.tahun,b.category,b.jenis FROM {$this->download} a LEFT JOIN {$this->ms_category} b ON a.category_id=b.category_id WHERE a.category_id='$cat'";
		/*ardi*/
		
        $query = $this->db->query($sql);
        $ret['num_rows'] = $query->num_rows();
        $query = $this->db->query($sql . " ORDER BY $sort $order LIMIT $offset,$rows ");
        $ret['result'] = $query->result();
        return $ret;
    }
    /* public surat edaran bpkd*/
    function get_public_surat_edaran_bpkd() {
        $start = $this->uri->segment(3, 0);
        $rows = 100;
        $_sql_where = array();
        $_sql_where[] = " category_id = '32' ";
        if (!empty($keyword)) {
            $_sql_where[] = " UCASE(title) LIKE '%" . strtoupper($this->db->escape_str($keyword)) . "%' ";
        }
        $cat = $this->db->escape_str($this->input->get('cat'));
        if (!empty($cat)) {
            $_sql_where[] = " b.category_id='$cat' ";
        }
        $sql_where = '';
        if (count($_sql_where) > 0) $sql_where = " WHERE " . implode(' AND ', $_sql_where);
        /*$sql = " SELECT * FROM {$this->download} D LEFT JOIN {$this->user} U ON (U.uid=D.uid) $sql_where ";*/
        
        /*ardi*/
		$sql ="SELECT a.download_id,b.category_id,a.title,a.date,a.uid,a.file,a.status,a.tahun,b.category,b.jenis FROM {$this->download} a LEFT JOIN {$this->ms_category} b ON a.category_id=b.category_id WHERE b.jenis='SURAT_EDARAN'";
		/*ardi*/
		
        $query = $this->db->query($sql);
        $ret['num_rows'] = $query->num_rows();
        $query = $this->db->query($sql . " ORDER BY download_id DESC LIMIT $start,$rows ");
        $ret['result'] = $query->result();
        return $ret;
    }
    function get_latest_surat_edaran_bpkd($limit = 5) {
        /*$query = $this->db->query(" SELECT * FROM {$this->download} WHERE status = 'publish' ORDER BY date DESC LIMIT $limit ");
        return $query->result();*/
        
        $query = $this->db->query("SELECT b.category_id,a.title,a.date,a.uid,a.file,a.status,a.tahun,b.category,b.jenis FROM {$this->download} a LEFT JOIN {$this->ms_category} b ON a.category_id=b.category_id
            WHERE a.status = 'publish' ORDER BY date DESC LIMIT $limit ");
        return $query->result();
    }

}