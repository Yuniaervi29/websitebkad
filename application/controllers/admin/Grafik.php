<?php

class Grafik extends CI_Controller {

	function __construct()
	{
		parent::__construct();
        $this->load->library('Admin');
		$this->load->model('master_model');
		$this->load->model('user_model');
		$this->load->model('grafik_model');

        if($this->session->userdata('status')!='login'){
			redirect(base_url("admin/login"));
		}
	}

	function index()
	{
        $unit = $this->grafik_model->get_unit();
		$output['UNIT'] =$unit['result'];
		
		$gol = $this->grafik_model->get_gol();
		$output['GOL'] =$gol['result'];
		
		$pend = $this->grafik_model->get_pend();
		$output['PEND'] =$pend['result'];
		
		$jab = $this->grafik_model->get_jab();
		$output['JAB'] =$jab['result'];
		
		$umur = $this->grafik_model->get_umur();
		$output['UMUR'] =$umur['result'];
		
		//NON ASN
        $unitnon = $this->grafik_model->get_unitnon();
		$output['UNITNON'] =$unitnon['result'];
		
		$golnon = $this->grafik_model->get_golnon();
		$output['GOLNON'] =$golnon['result'];
		
		$pendnon = $this->grafik_model->get_pendnon();
		$output['PENDNON'] =$pendnon['result'];
		
		$jabnon = $this->grafik_model->get_jabnon();
		$output['JABNON'] =$jabnon['result'];
		
		$umurnon = $this->grafik_model->get_umurnon();
		$output['UMURNON'] =$umurnon['result'];
		
		$magang = $this->grafik_model->get_magang();
		$output['MAGANG'] =$magang['result'];
		
		
		$output['PAGE_TITLE'] = 'GRAFIK INFO KEPEGAWAIAN';
		$this->admin->view('admin/info_peg', $output);
	}





	function edit_data()
	{
		$id = $this->input->post('no');
		$data['lk']		= $this->input->post('lk');
		$data['pr']		= $this->input->post('pr');

		$st = $this->input->post('st');
		if ($st=='unit') {
			$result = $this->grafik_model->update_unit($data,$id);
		}else if($st=='gol'){
			$result = $this->grafik_model->update_gol($data,$id);
		}else if($st=='jab'){
			$result = $this->grafik_model->update_jab($data,$id);
		}else if($st=='pend'){
			$result = $this->grafik_model->update_pend($data,$id);
		}else if($st=='umur'){
			$result = $this->grafik_model->update_umur($data,$id);
		}else if($st=='unitnon'){
			$result = $this->grafik_model->update_unitnon($data,$id);
		}else if($st=='pendnon'){
			$result = $this->grafik_model->update_pendnon($data,$id);
		}else if($st=='golnon'){
			$result = $this->grafik_model->update_golnon($data,$id);
		}else if($st=='jabnon'){
			$result = $this->grafik_model->update_jabnon($data,$id);
		}else if($st=='umurnon'){
			$result = $this->grafik_model->update_umurnon($data,$id);
		}else if($st=='magang'){
			$result = $this->grafik_model->update_magang($data,$id);
		}
		

		echo json_encode($result);
		
	}

	
}