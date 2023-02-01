<?php ?><?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Master_model extends CI_Model {
    function __construct() {
        parent::__construct();
        $this->tables 
		= array(
				'posts' => 'posts', 
				'user' => 'user', 
				'user_access' => 'user_access', 
				'download' => 'download', 
				'download_category' => 'download_category', 
				'album' => 'album', 
				'gallery' => 'gallery', 
				'banner' => 'banner', 
				'image' => 'image', 
                'grafik_unit_kerja' => 'grafik_unit_kerja', 
				'links' => 'links', 
				'options' => 'options'
				);
        /* initialize table name for this class */
        $this->get_tables($this);
    }
    /**
     * Define table name for universal model
     */
    function get_tables($class) {
        if (count($this->tables) > 0) {
            foreach ($this->tables as $key => $t) {
                $class->{$key} = $this->db->dbprefix($t);
            }
        }
    }
    /**
     * Escaping several data in a time
     *
     */
    function escape_all($data) {
        if (!is_array($data)) return $this->db->escape_str($data);
        $tmp = array();
        if (count($data) > 0) {
            foreach ($data as $key => $val) {
                $tmp[$key] = $this->db->escape_str($val);
            }
        }
        return $tmp;
    }
    /**
     * Get option vars stored in database
     */
    function get_option($var) {
        static $v;
        if (!is_array($v)) {
            $v = array();
            $query = $this->db->query(" SELECT * FROM {$this->options} ");
            $result = $query->result();
            if (count($result) > 0) {
                foreach ($result as $row) {
                    $v[$row->var] = ($row->val == '') ? $row->default : $row->val;
                }
            }
        }
        return isset($v[$var]) ? $v[$var] : NULL;
    }
    /**
     * Set option vars stored in database
     */
    function set_option($var, $val = '') {
        if (is_array($var)) {
            $tmp = array();
            if (count($var) > 0) {
                foreach ($var as $k => $v) {
                    $k = $this->db->escape_str($k);
                    $v = $this->db->escape_str($v);
                    $tmp[] = "('$k','$v')";
                }
                $data = @implode(',', $tmp);
                $insert_string = " INSERT INTO `{$this->options}` (`var`,`val`) VALUES $data ON DUPLICATE KEY UPDATE val=VALUES(val) ";
                return $this->db->query($insert_string);
            }
            return FALSE;
        } else {
            $query = $this->db->query(" SELECT * FROM {$this->options} WHERE var='$var' ORDER BY var ASC LIMIT 1 ");
            if ($query->num_rows() > 0) {
                $d['val'] = $val;
                $this->db->where('var', $var);
                return $this->db->update($this->options, $d);
            } else {
                $d['var'] = $var;
                $d['val'] = $val;
                return $this->db->insert($this->options, $d);
            }
        }
    }
	
	function get_komentar_adm($id1){
		$query = $this->db->query("select * from komentar where id_artikel='$id1' and id_artikel<>'0'");
		return $query->result();
	}
	
	function get_komentar(){
		$query = $this->db->query("select * from komentar where id_artikel='0' order by id desc LIMIT 0,20");
		return $query->result();
	}
	
	public function save($table, $data){
		$this->db->insert($table, $data);
	}
	
	
}