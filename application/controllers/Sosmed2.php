<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sosmed2 extends CI_Controller {
	function __construct()
	{
		parent::__construct();
        $this->load->library('Template');
        $this->load->model('sosmed2_model');
     
	}
	public function index()
	{
		
		$this->template->view('sosmed2/v_sosmed2');
    }

    

    


}