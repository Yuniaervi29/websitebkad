<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Error extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		$this->load->library('Template');

		$this->load->helper('text');
	}
	public function index()
	{
        $this->template->view('404');
    }
}