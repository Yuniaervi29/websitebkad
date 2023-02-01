<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Penyalahgunaan_wewenang extends CI_Controller {

function __construct(){
		parent::__construct();
		$this->load->library('Template');
		$this->load->model('post_model');
		$this->load->model('master_model');
	}
	

    
    function add(){
            
			$upload_path = 'uploads/penyalahgunaan-wewenang/';

            
            $noreg['noreg']		= $this->input->post('noreg');
            $today = date('Y-m-d');
            
			$data['noreg']		= $this->input->post('noreg');
			$data['tgl']		= $today;
			$data['nama']		= $this->input->post(htmlspecialchars('nama'));
			$data['pekerjaan']	= $this->input->post(htmlspecialchars('pekerjaan'));
			$data['alamat']		= $this->input->post(htmlspecialchars('alamat'));
			$data['hp']		    = $this->input->post(htmlspecialchars('hp'));
			$data['nik']		= $this->input->post(htmlspecialchars('nik'));
			$data['rincian']	= $this->input->post(htmlspecialchars('rincian'));
		    $data['tujuan']	= $this->input->post(htmlspecialchars('tujuan'));
		    $data['namaterlapor']	= $this->input->post(htmlspecialchars('namaterlapor'));
		    $data['unitkerja']	= $this->input->post(htmlspecialchars('unitkerja'));
		    $data['email']	= $this->input->post(htmlspecialchars('email'));
		    $data['get_info'] = $this->input->post('getInfo')[0];
		    $data['get_salinan_info'] = $this->input->post('getsalinanInfo')[0];
		    
			$this->db->insert('inbox_penyalahgunaan',$data);
			
			$output['TITLE_1'] = 'PENYALAHGUNAAN WEWENANG';
			$output['TITLE_2'] = 'PENYALAHGUNAAN WEWENANG';
    		$output['IMAGE'] = isset($post->post_image) ? $post->post_image : '';
    		$this->template->view('penyalahgunaan_wewenang',$output);

    }
    
   
    
    
    
    function cetak(){
		
		$noreg = $this->uri->segment(3);
		
		// panggil library yang kita buat sebelumnya yang bernama pdfgenerator
        $this->load->library('pdfgenerator');
        
        // title dari pdf
        $this->data['title_pdf'] = 'FORMULIR-PERMOHONAN-INFORMASI-PUBLIK';
        
        // filename dari pdf ketika didownload
        $file_pdf = 'FORMULIR-PERMOHONAN-INFORMASI-PUBLIK';
        // setting paper
        $paper = 'A4';
        //orientasi paper potrait / landscape
        $orientation = "portrait";
        
		$html = $this->load->view('cetakan_permohonan_informasi',$this->data, true);	    
        
        // run dompdf
        $this->pdfgenerator->generate($html, $file_pdf,$paper,$orientation);
	}
	
    function cetakJawaban(){
		
		$noreg = $this->uri->segment(3);
		
		// panggil library yang kita buat sebelumnya yang bernama pdfgenerator
        $this->load->library('pdfgenerator');
        
        // title dari pdf
        $this->data['title_pdf'] = 'FORMULIR-JAWABAN-PERMOHONAN-INFORMASI-PUBLIK';
        
        // filename dari pdf ketika didownload
        $file_pdf = 'FORMULIR-JAWABAN-PERMOHONAN-INFORMASI-PUBLIK';
        // setting paper
        $paper = 'A4';
        //orientasi paper potrait / landscape
        $orientation = "portrait";
        
		$html = $this->load->view('cetakan_jawaban',$this->data, true);	    
        
        // run dompdf
        $this->pdfgenerator->generate($html, $file_pdf,$paper,$orientation);
	}
	
	function register(){
	    $this->template->view('register_permohonan');
	}
	
	function delete()
	{
        $id = $this->input->post('id');
        $data = $this->db->delete('inbox_permohonan_informasi', array('id' => $id));
		echo json_encode($data);
	}
	
	function get_data(){
	    $id = $this->input->post('id');
        $data = $this->db->select('id,noreg,tgl,nama,pekerjaan,alamat,email,hp,nik,rincian,tujuan,get_info,get_salinan_info')->from('inbox_pelayanan_publik')->where('id',$id)->get();
        foreach($data->result() as $a){
        $result = array(
                'id' => $a->id,
                'noreg' => $a->noreg,
                'tgl' => $a->tgl,
                'nama' => $a->nama,
                'pekerjaan' => $a->pekerjaan,
                'alamat' => $a->alamat,
                'email' => $a->email,
                'hp' => $a->hp,
                'nik' => $a->nik,
                'rincian' => $a->rincian,
                'tujuan' => $a->tujuan,
                'get_info' => $a->get_info,
                'get_salinan_info' => $a->get_salinan_info
            );
        }
		echo json_encode($result);
	}

}