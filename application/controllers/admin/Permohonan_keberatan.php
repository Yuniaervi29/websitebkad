<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Permohonan_keberatan extends CI_Controller {

function __construct(){
		parent::__construct();
		$this->load->library('Template');
	}
	

    
    function add(){
            
			$upload_path = 'uploads/permohonan-informasi/';
			if(substr(sprintf('%o', fileperms($upload_path)), -4) != '0777'){
				chmod($upload_path, 0777);
			}

			if( isset($_FILES['upload_nik']['tmp_name']) AND is_uploaded_file($_FILES['upload_nik']['tmp_name']) ){
				$filename				= $this->security->sanitize_filename(strtolower($_FILES['upload_nik']['name']));
				$filename				= 'nik_'.date('d-m-Y h:i:s').'_'.$filename;
				$data['upload_nik']		= $filename;
				$destination			= $upload_path . $filename;
				move_uploaded_file($_FILES['upload_nik']['tmp_name'], $destination);
			}
            
            $upload_path2 = 'uploads/permohonan-informasi/';
			if(substr(sprintf('%o', fileperms($upload_path2)), -4) != '0777'){
				chmod($upload_path2, 0777);
			}
			
			if( isset($_FILES['upload_lampiran']['tmp_name']) AND is_uploaded_file($_FILES['upload_lampiran']['tmp_name']) ){
				$filename2				= $this->security->sanitize_filename(strtolower($_FILES['upload_lampiran']['name']));
				$filename2				= 'file_'.date('d-m-Y h:i:s').'_'.$filename2;
				$data['upload_lampiran']		= $filename2;
				$destination			= $upload_path2 . $filename2;
				move_uploaded_file($_FILES['upload_lampiran']['tmp_name'], $destination);
			}

            
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
		    $data['email']	= $this->input->post(htmlspecialchars('email'));
		    $data['get_info'] = $this->input->post('getInfo')[0];
		    $data['get_salinan_info'] = $this->input->post('getsalinanInfo')[0];
		    
			$this->db->insert('inbox_permohonan_informasi',$data);
			$this->load->view('sukses_page',$noreg);

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
        // echo $html;
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
        //echo $html;
        //run dompdf
        $this->pdfgenerator->generate($html, $file_pdf,$paper,$orientation);
	}
	
	function register(){
	    $this->template->view('register_permohonan');
	}
	
	function delete()
	{
        $id = $this->input->post('id');
        $data = $this->db->delete('inbox_pengajuan_keberatan', array('id' => $id));
		echo json_encode($data);
	}
	
	function get_data(){
	    $id = $this->input->post('id');
        $data = $this->db->select('id,noregpermohonan,tgl,nama,pekerjaan,alamat,email,hp,nik,rincian,tujuan')->from('inbox_pengajuan_keberatan')->where('id',$id)->get();
        foreach($data->result() as $a){
        $result = array(
                'id' => $a->id,
                'noregpermohonan' => $a->noregpermohonan,
                'tgl' => $a->tgl,
                'nama' => $a->nama,
                'pekerjaan' => $a->pekerjaan,
                'alamat' => $a->alamat,
                'email' => $a->email,
                'hp' => $a->hp,
                'nik' => $a->nik,
                'rincian' => $a->rincian,
                'tujuan' => $a->tujuan
            );
        }
		echo json_encode($result);
	}
	function get_data_update(){
	    $id = $this->input->post('id');
        $data = $this->db->select('id,noregpermohonan,tgl,nama,pekerjaan,alamat,email,hp,nik,rincian,tujuan,get_info,get_salinan_info')->from('inbox_permohonan_informasi')->where('id',$id)->get();
        foreach($data->result() as $a){
        $result = array(
                'id' => $a->id,
                'noregpermohonan' => $a->noregpermohonan,
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