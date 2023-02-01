<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Proses_permohonan_penolakan extends CI_Controller {

function __construct(){
		parent::__construct();
		$this->load->library('Template');
		$this->load->library('Admin');
		$this->load->model('master_model');
		$this->load->model('user_model');
		 if($this->session->userdata('status')!='login'){
			redirect(base_url("admin/login"));
		}
	}
	

    function simpan()
    {   
        $noreg['noreg']		= $this->input->post('noreg');
        
        $data['noregpermohonan'] = $this->input->post('noregpermohonan');
        $data['tgl'] = $this->input->post('tgl');
        $data['nama'] = $this->input->post('nama');
        $data['alamat'] = $this->input->post('alamat');
        $data['hp'] = $this->input->post('hp');
        $data['keputusan'] = $this->input->post('keputusan');
        $data['tgl_proses'] = $this->input->post('tgl_proses');
        $data['namaatasan'] = $this->input->post('namaatasan');
        $data['posisiatasan'] = $this->input->post('posisiatasan');
        $data['form_id'] = $this->input->post('form_id');
        $data['status_id'] = $this->input->post('status_id');
        $data['tanggapan'] = $this->input->post('tanggapan');
        
        $this->db->insert('proses_permohonan_keberatan',$data,array('noreg'=>$noreg));
         $this->session->set_userdata('message','Data telah tersimpan.');
		$this->session->set_userdata('message_type','success');
        // $this->load->view('sukses_page2',$noreg);
        redirect(base_url('admin/register_penolakan'));
		
        
    }
    function update()
    {   
        $noreg['noreg']		= $this->input->post('noreg');
        
        $data['noregpermohonan'] = $this->input->post('noregpermohonan');
        $data['tgl'] = $this->input->post('tgl');
        $data['nama'] = $this->input->post('nama');
        $data['alamat'] = $this->input->post('alamat');
        $data['hp'] = $this->input->post('hp');
        $data['keputusan'] = $this->input->post('keputusan');
        $data['tgl_proses'] = $this->input->post('tgl_proses');
        $data['namaatasan'] = $this->input->post('namaatasan');
        $data['posisiatasan'] = $this->input->post('posisiatasan');
        $data['form_id'] = $this->input->post('form_id');
        $data['status_id'] = $this->input->post('status_id');
        $data['tanggapan'] = $this->input->post('tanggapan');
        
        $this->db->update('proses_permohonan_keberatan',$data,array('noreg'=>$noreg));
        $this->session->set_userdata('message','Data telah tersimpan.');
		$this->session->set_userdata('message_type','success');
        // $this->load->view('admin/register_informasi');
        redirect(base_url('admin/register_informasi'));


        
    }
    
    function cetak(){
		$noreg = $this->uri->segment(3);
		
		// panggil library yang kita buat sebelumnya yang bernama pdfgenerator
        $this->load->library('pdfgenerator');
        
        // title dari pdf
        $this->data['title_pdf'] = 'PEMBERITAHUAN TERTULIS';
        
        // filename dari pdf ketika didownload
        $file_pdf = 'PEMBERITAHUAN TERTULIS';
        // setting paper
        $paper = 'A4';
        //orientasi paper potrait / landscape
        $orientation = "portrait";
        
		$html = $this->load->view('cetakan_proses_permohonan_informasi',$this->data, true);	    
        
        // run dompdf
        $this->pdfgenerator->generate($html, $file_pdf,$paper,$orientation);
	}
	
	function delete()
	{
        $id = $this->input->post('id');
        $data = $this->db->delete('proses_permohonan_keberatan', array('form_id' => $id));
		echo json_encode($data);
	}
	
    
    

}