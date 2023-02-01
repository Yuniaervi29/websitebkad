<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sosmed extends CI_Controller {
	function __construct()
	{
		parent::__construct();
        $this->load->library('Template');
        $this->load->model('sosmed_model');
     
	}
	public function index()
	{
		
		$this->template->view('sosmed/v_sosmed');
    }

    

    


}