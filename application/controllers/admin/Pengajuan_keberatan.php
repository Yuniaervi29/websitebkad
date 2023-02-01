<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pengajuan_keberatan extends CI_Controller {

function __construct(){
		parent::__construct();
// 		$this->load->model('mpdf_model');
		    $this->load->library('Template');
			$this->load->model('post_model');
			$this->load->model('master_model');
	}
    
    function add(){
            
            $noreg['noreg']		= $this->input->post('noreg');
            $today = date('Y-m-d');
            
			$data['noreg']		= $this->input->post(htmlspecialchars('noreg'));
			$data['noregpermohonan']		= $this->input->post('noregpermohonan');
			$data['tgl']		= $today;
		    $data['tujuan']		= $this->input->post(htmlspecialchars('tujuan'));
			$data['nama']		= $this->input->post(htmlspecialchars('nama'));
			$data['pekerjaan']	= $this->input->post(htmlspecialchars('pekerjaan'));
			$data['alamat']		= $this->input->post(htmlspecialchars('alamat'));
			$data['hp']		    = $this->input->post(htmlspecialchars('hp'));
			$data['nik']		= $this->input->post(htmlspecialchars('nik'));
            $data['namakuasa']		= $this->input->post(htmlspecialchars('namakuasa'));
			$data['alamatkuasa']		= $this->input->post(htmlspecialchars('alamatkuasa'));
			$data['hpkuasa']		    = $this->input->post(htmlspecialchars('hpkuasa'));
			$data['rincian']	= $this->input->post(htmlspecialchars('rincian'));
		    $data['email']	= $this->input->post(htmlspecialchars('email'));
		  //  $data['get_info'] = $this->input->post('getInfo')[0];
		  //  $data['get_salinan_info'] = $this->input->post('getsalinanInfo')[0];
		    
			$this->db->insert('inbox_pengajuan_keberatan',$data);
// 			$this->load->view('sukses_keberatan',$noreg);
            $output['TITLE_1'] = 'PENGAJUAN KEBERATAN';
    		$output['IMAGE'] = isset($post->post_image) ? $post->post_image : '';
    		$this->template->view('pengajuan_keberatan',$output);

    }
    
    function cetak(){
		$noreg = $this->uri->segment(3);
		
		// panggil library yang kita buat sebelumnya yang bernama pdfgenerator
        $this->load->library('pdfgenerator');
        
        // title dari pdf
        $this->data['title_pdf'] = 'FORMULIR-PERMOHONAN-PENGAJUAN-KEBERATAN';
        
        // filename dari pdf ketika didownload
        $file_pdf = 'FORMULIR-PERMOHONAN-PENGAJUAN-KEBERATAN';
        // setting paper
        $paper = 'A4';
        //orientasi paper potrait / landscape
        $orientation = "portrait";
        
		$html = $this->load->view('cetakan_keberatan',$this->data, true);	    
        
        // run dompdf
        $this->pdfgenerator->generate($html, $file_pdf,$paper,$orientation);
	}
	
	function register(){
	    $this->template->view('register_keberatan');
	}
	
	function delete()
	{
        $id = $this->input->post('id');
        $data = $this->db->delete('inbox_pengajuan_keberatan', array('id' => $id));
		echo json_encode($data);
	}

}