<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Polling extends CI_Controller {
	
	public function index(){
		
		$this->load->view('poll_vote');
	}
	
    function p2(){
        $this->load->view('poll_vote2');
    }
    
    function p3(){
        $this->load->view('poll_vote3');
    }

	
}