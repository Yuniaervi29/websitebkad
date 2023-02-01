<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Register_informasi extends CI_Controller {

	function __construct()
	{
		parent::__construct();
        $this->load->library('Admin');
		
        
        if($this->session->userdata('status')!='login'){
			redirect(base_url("admin/login"));
		}
	}

	function index()
	{
		$this->admin->view('admin/register_informasi');
    }

}