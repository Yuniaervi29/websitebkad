<?php  
    class Model_login extends CI_Model {  
    function __construct()  
    {  
        parent::__construct();  
        $this->load->database();  
    }  
      
    public function islogin($data){  
        $query=$this->db->get_where('user',array('username'=>$data['username'],'password'=>$data['password'],));  
        return $query;  
    }  
}