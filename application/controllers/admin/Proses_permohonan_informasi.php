<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Proses_permohonan_informasi extends CI_Controller {

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
        
        $data['noreg'] = $this->input->post('noreg');
        $data['tgl'] = $this->input->post('tgl');
        $data['nama'] = $this->input->post('nama');
        $data['alamat'] = $this->input->post('alamat');
        $data['email'] = $this->input->post('email');
        $data['hp'] = $this->input->post('hp');
        $data['info_publik'] = $this->input->post('pilih1');
        $data['bentuk_fisik'] = $this->input->post('pilih2');
        $data['badan_publik'] = $this->input->post('badan_publik');
        $data['kirim'] = $this->input->post('rp_kirim');
        $data['lain2'] = $this->input->post('rp_lain_lain'); 
        $data['lembar'] = $this->input->post('lembar');
        $data['harga'] = $this->input->post('rp_salin');
        $data['total'] = $this->input->post('rp_total');
        $data['total_harga'] = $this->input->post('total');
        $data['waktu'] = $this->input->post('waktu');
        $data['ket'] = $this->input->post('ket');
        $data['ditolak'] = $this->input->post('pilih4');
        $data['waktu2'] = $this->input->post('waktu_tunda');
        $data['form_id'] = $this->input->post('form_id');
        $data['status_id'] = $this->input->post('status_id');
        $data['tgl_proses'] = $this->input->post('tgl_proses');
        
        $this->db->insert('proses_permohonan_informasi',$data);
        // $this->load->view('sukses_page2',$noreg);
        redirect(base_url('admin/register_informasi'));
		
        
    }
    function update()
    {   
        $noreg		= $this->input->post('noreg');
        
        $data['noreg'] = $noreg;
        $data['tgl'] = $this->input->post('tgl');
        $data['nama'] = $this->input->post('nama');
        $data['alamat'] = $this->input->post('alamat');
        $data['email'] = $this->input->post('email');
        $data['hp'] = $this->input->post('hp');
        $data['info_publik'] = $this->input->post('pilih1update');
        $data['bentuk_fisik'] = $this->input->post('pilih2update');
        $data['badan_publik'] = $this->input->post('badan_publikupdate');
        $data['kirim'] = $this->input->post('rp_kirimupdate');
        $data['lain2'] = $this->input->post('rp_lain_lainupdate'); 
        $data['lembar'] = $this->input->post('lembarupdate');
        $data['harga'] = $this->input->post('rp_salinupdate');
        $data['total'] = $this->input->post('rp_totalupdate');
        $data['total_harga'] = $this->input->post('totalupdate');
        $data['waktu'] = $this->input->post('waktuupdate');
        $data['ket'] = $this->input->post('ketupdate');
        $data['ditolak'] = $this->input->post('pilih4update');
        $data['waktu2'] = $this->input->post('waktu_tundaupdate');
        $data['form_id'] = $this->input->post('form_id');
        $data['status_id'] = $this->input->post('status_id');
        $data['tgl_proses'] = $this->input->post('tgl_prosesupdate');
        
        $this->db->update('proses_permohonan_informasi',$data,array('noreg'=>$noreg));
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
        $data = $this->db->delete('proses_permohonan_informasi', array('form_id' => $id));
		echo json_encode($data);
	}
	
    
    

}