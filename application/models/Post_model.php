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
    
    function get_post_profil($id) {
        $query = $this->db->query(" SELECT * FROM struktur_org WHERE id = '$id' ");
        return (object)$query->row();
    }
    
    function insert_post($data) {
        $this->db->insert($this->posts, $data);
        return $this->db->affected_rows();
    }
    function update_post($data, $id) {
        $id = $this->db->escape_str($id);
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
    
    /*ardi 17062021*/
    function get_maklumat() {
        $page = $this->input->post('page') ? $this->input->post('page') : 1;
        $rows = $this->input->post('rows') ? $this->input->post('rows') : 20;
        $sort = $this->input->post('sort') ? $this->input->post('sort') : 'post_id';
        $order = $this->input->post('order') ? $this->input->post('order') : 'desc';
        $keyword = $this->input->post('q') ? $this->input->post('q') : '';
        $offset = ($page - 1) * $rows;
        $_sql_where = array();
        $_sql_where[] = " post_type = 'maklumat' ";
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
    
    /*ardi 17062021*/
    function get_kinerja() {
        $page = $this->input->post('page') ? $this->input->post('page') : 1;
        $rows = $this->input->post('rows') ? $this->input->post('rows') : 20;
        $sort = $this->input->post('sort') ? $this->input->post('sort') : 'post_id';
        $order = $this->input->post('order') ? $this->input->post('order') : 'desc';
        $keyword = $this->input->post('q') ? $this->input->post('q') : '';
        $offset = ($page - 1) * $rows;
        $_sql_where = array();
        $_sql_where[] = " post_type = 'kinerja' ";
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
    
    /*ardi 17062021*/
    function get_profil_ppid() {
        $page = $this->input->post('page') ? $this->input->post('page') : 1;
        $rows = $this->input->post('rows') ? $this->input->post('rows') : 20;
        $sort = $this->input->post('sort') ? $this->input->post('sort') : 'post_id';
        $order = $this->input->post('order') ? $this->input->post('order') : 'desc';
        $keyword = $this->input->post('q') ? $this->input->post('q') : '';
        $offset = ($page - 1) * $rows;
        $_sql_where = array();
        $_sql_where[] = " post_type = 'profil_ppid' "; 
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
    
    /*ardi 17062021*/
    function get_sejarah_singkat() {
        $page = $this->input->post('page') ? $this->input->post('page') : 1;
        $rows = $this->input->post('rows') ? $this->input->post('rows') : 20;
        $sort = $this->input->post('sort') ? $this->input->post('sort') : 'post_id';
        $order = $this->input->post('order') ? $this->input->post('order') : 'desc';
        $keyword = $this->input->post('q') ? $this->input->post('q') : '';
        $offset = ($page - 1) * $rows;
        $_sql_where = array();
        $_sql_where[] = " post_type = 'sejarah_singkat' ";
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
    
    function get_visi_misi() {
        $page = $this->input->post('page') ? $this->input->post('page') : 1;
        $rows = $this->input->post('rows') ? $this->input->post('rows') : 20;
        $sort = $this->input->post('sort') ? $this->input->post('sort') : 'post_id';
        $order = $this->input->post('order') ? $this->input->post('order') : 'desc';
        $keyword = $this->input->post('q') ? $this->input->post('q') : '';
        $offset = ($page - 1) * $rows;
        $_sql_where = array();
        $_sql_where[] = " post_type = 'visi_misi' ";
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
    
    /*ardi 17062021*/
    function get_tugas_pokok() {
        $page = $this->input->post('page') ? $this->input->post('page') : 1;
        $rows = $this->input->post('rows') ? $this->input->post('rows') : 20;
        $sort = $this->input->post('sort') ? $this->input->post('sort') : 'post_id';
        $order = $this->input->post('order') ? $this->input->post('order') : 'desc';
        $keyword = $this->input->post('q') ? $this->input->post('q') : '';
        $offset = ($page - 1) * $rows;
        $_sql_where = array();
        $_sql_where[] = " post_type = 'tugas_pokok' ";
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
    function get_program_kerja() {
        $page = $this->input->post('page') ? $this->input->post('page') : 1;
        $rows = $this->input->post('rows') ? $this->input->post('rows') : 20;
        $sort = $this->input->post('sort') ? $this->input->post('sort') : 'post_id';
        $order = $this->input->post('order') ? $this->input->post('order') : 'desc';
        $keyword = $this->input->post('q') ? $this->input->post('q') : '';
        $offset = ($page - 1) * $rows;
        $_sql_where = array();
        $_sql_where[] = " post_type = 'program_kerja' ";
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
    function get_pelayanan_publik() {
        $page = $this->input->post('page') ? $this->input->post('page') : 1;
        $rows = $this->input->post('rows') ? $this->input->post('rows') : 20;
        $sort = $this->input->post('sort') ? $this->input->post('sort') : 'post_id';
        $order = $this->input->post('order') ? $this->input->post('order') : 'desc';
        $keyword = $this->input->post('q') ? $this->input->post('q') : '';
        $offset = ($page - 1) * $rows;
        $_sql_where = array();
        $_sql_where[] = " post_type = 'pelayanan_publik' ";
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
    function get_penyalahgunaan_wewenang() {
        $page = $this->input->post('page') ? $this->input->post('page') : 1;
        $rows = $this->input->post('rows') ? $this->input->post('rows') : 20;
        $sort = $this->input->post('sort') ? $this->input->post('sort') : 'post_id';
        $order = $this->input->post('order') ? $this->input->post('order') : 'desc';
        $keyword = $this->input->post('q') ? $this->input->post('q') : '';
        $offset = ($page - 1) * $rows;
        $_sql_where = array();
        $_sql_where[] = " post_type = 'penyalahgunaan_wewenang' ";
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
    function get_opini() {
        $page = $this->input->post('page') ? $this->input->post('page') : 1;
        $rows = $this->input->post('rows') ? $this->input->post('rows') : 20;
        $sort = $this->input->post('sort') ? $this->input->post('sort') : 'post_id';
        $order = $this->input->post('order') ? $this->input->post('order') : 'desc';
        $keyword = $this->input->post('q') ? $this->input->post('q') : '';
        $offset = ($page - 1) * $rows;
        $_sql_where = array();
        $_sql_where[] = " post_type = 'opini' ";
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
    
    function get_informasi_publik() {
        $page = $this->input->post('page') ? $this->input->post('page') : 1;
        $rows = $this->input->post('rows') ? $this->input->post('rows') : 20;
        $sort = $this->input->post('sort') ? $this->input->post('sort') : 'post_id';
        $order = $this->input->post('order') ? $this->input->post('order') : 'desc';
        $keyword = $this->input->post('q') ? $this->input->post('q') : '';
        $offset = ($page - 1) * $rows;
        $_sql_where = array();
        $_sql_where[] = " post_type = 'informasi_publik' ";
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
    
    /*ardi 17062021*/
    function get_tujuan_sasaran() {
        $page = $this->input->post('page') ? $this->input->post('page') : 1;
        $rows = $this->input->post('rows') ? $this->input->post('rows') : 20;
        $sort = $this->input->post('sort') ? $this->input->post('sort') : 'post_id';
        $order = $this->input->post('order') ? $this->input->post('order') : 'desc';
        $keyword = $this->input->post('q') ? $this->input->post('q') : '';
        $offset = ($page - 1) * $rows;
        $_sql_where = array();
        $_sql_where[] = " post_type = 'tujuan_sasaran' ";
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
    function get_struktur_organisasi() {
        $page = $this->input->post('page') ? $this->input->post('page') : 1;
        $rows = $this->input->post('rows') ? $this->input->post('rows') : 20;
        $sort = $this->input->post('sort') ? $this->input->post('sort') : 'post_id';
        $order = $this->input->post('order') ? $this->input->post('order') : 'desc';
        $keyword = $this->input->post('q') ? $this->input->post('q') : '';
        $offset = ($page - 1) * $rows;
        $_sql_where = array();
        $_sql_where[] = " post_type = 'struktur_organisasi' ";
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
    
    /*ardi 17062021*/
    function get_prosedur_informasi() {
        $page = $this->input->post('page') ? $this->input->post('page') : 1;
        $rows = $this->input->post('rows') ? $this->input->post('rows') : 20;
        $sort = $this->input->post('sort') ? $this->input->post('sort') : 'post_id';
        $order = $this->input->post('order') ? $this->input->post('order') : 'desc';
        $keyword = $this->input->post('q') ? $this->input->post('q') : '';
        $offset = ($page - 1) * $rows;
        $_sql_where = array();
        $_sql_where[] = " post_type = 'prosedur_informasi' ";
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
    
    /*ardi 17062021*/
    function get_prosedur_keberatan() {
        $page = $this->input->post('page') ? $this->input->post('page') : 1;
        $rows = $this->input->post('rows') ? $this->input->post('rows') : 20;
        $sort = $this->input->post('sort') ? $this->input->post('sort') : 'post_id';
        $order = $this->input->post('order') ? $this->input->post('order') : 'desc';
        $keyword = $this->input->post('q') ? $this->input->post('q') : '';
        $offset = ($page - 1) * $rows;
        $_sql_where = array();
        $_sql_where[] = " post_type = 'prosedur_keberatan' ";
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
    
    /*ardi 17062021*/
    function get_jadwal() {
        $page = $this->input->post('page') ? $this->input->post('page') : 1;
        $rows = $this->input->post('rows') ? $this->input->post('rows') : 20;
        $sort = $this->input->post('sort') ? $this->input->post('sort') : 'post_id';
        $order = $this->input->post('order') ? $this->input->post('order') : 'desc';
        $keyword = $this->input->post('q') ? $this->input->post('q') : '';
        $offset = ($page - 1) * $rows;
        $_sql_where = array();
        $_sql_where[] = " post_type = 'jadwal' ";
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
    
    /*ardi 17062021*/
    function get_struktur_ppid() {
        $page = $this->input->post('page') ? $this->input->post('page') : 1;
        $rows = $this->input->post('rows') ? $this->input->post('rows') : 20;
        $sort = $this->input->post('sort') ? $this->input->post('sort') : 'post_id';
        $order = $this->input->post('order') ? $this->input->post('order') : 'desc';
        $keyword = $this->input->post('q') ? $this->input->post('q') : '';
        $offset = ($page - 1) * $rows;
        $_sql_where = array();
        $_sql_where[] = " post_type = 'struktur_ppid' ";
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
    
    /*ardi 17062021*/
    function get_tugas_pokok_ppid() {
        $page = $this->input->post('page') ? $this->input->post('page') : 1;
        $rows = $this->input->post('rows') ? $this->input->post('rows') : 20;
        $sort = $this->input->post('sort') ? $this->input->post('sort') : 'post_id';
        $order = $this->input->post('order') ? $this->input->post('order') : 'desc';
        $keyword = $this->input->post('q') ? $this->input->post('q') : '';
        $offset = ($page - 1) * $rows;
        $_sql_where = array();
        $_sql_where[] = " post_type = 'tugas pokok ppid' ";
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
    
    /*end*/
    
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