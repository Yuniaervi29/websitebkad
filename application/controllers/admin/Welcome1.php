<?php
class Welcome extends CI_Controller
{
    function __construct()
	{
		parent::__construct();
		$this->load->library('Admin');
		$this->load->model('album_model');
		$this->load->model('gallery_model');
		$this->load->model('post_model');
		$this->load->model('banner_model');
		$this->load->model('video_model');
		$this->load->model('agenda_model');

		if($this->session->userdata('status')!='login'){
			redirect(base_url("admin/login"));
		}
    }
    
    public function index(){
        $this->admin->view('admin/home');
    }    
}
