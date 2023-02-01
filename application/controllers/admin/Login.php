<?php
class Login extends CI_Controller
{
    function __construct(){  
        parent::__construct();  
        $this->load->model('model_login');  
    } 
    public function index(){
        $this->load->view('admin/login');
    }
    public function check_login(){
       
		$username = $this->input->post('username');
		$password = md5($this->input->post('password'));

		$data = array(
			'username' => $username,
			'password' => $password);
        $cek=$this->model_login->islogin($data);  
        if($cek->num_rows() > 0){    
            
            foreach ($cek->result() as $row)
			{
				$data_session = array(
					'username' 		=> $username,
					'email'			=> $row->email,
					'nama'			=> $row->nama,
					'id'			=> $row->uid,
					'status'		=> "login",
					
				);

				$this->session->set_userdata($data_session);
            }
            
            echo '1';  
        }else{  
            echo '0';  
        }  
    }

    public function logout(){  
        $this->session->sess_destroy();  
        header('location:'.base_url()."admin/login/".$this->index());  
          
    }
}
