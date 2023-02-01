<?php
class Informasi extends CI_Controller
{
    function __construct()
	{
		parent::__construct();
        $this->load->library('Template');
        $this->load->model('post_model');
        $this->load->model('download_model');
		$this->load->model('download_category_model');
		
		 $this->load->database();

		$this->load->model('master_model');
        $this->load->model('grafik_model');
		$this->load->model('album_model');

		$this->load->model('post_model');
		$this->load->library('Template');
     
	}
	public function informasi_berkala()
	{
        $cat = $this->input->get('cat');
		$download = $this->download_model->get_informasi_berkala();
		$category = $this->download_category_model->get_download_category_by_id($cat);
		$category_name = isset($category->category) ? $category->category : 'INFORMASI BERKALA';
		
		$output['TITLE'] = strtoupper($category_name);
		$output['DOWNLOAD'] = $download['result'];


		$this->template->view('informasi/informasi_berkala',$output);
    }
    public function informasi_serta_merta()
	{
        $cat = $this->input->get('cat');
		$download = $this->download_model->get_informasi_serta_merta();
		$category = $this->download_category_model->get_download_category_by_id($cat);
		$category_name = isset($category->category) ? $category->category : 'INFORMASI SERTA MERTA';
		
		$output['TITLE'] = strtoupper($category_name);
		$output['DOWNLOAD'] = $download['result'];


		$this->template->view('informasi/informasi_serta_merta',$output);
    }
    public function informasi_setiap_saat()
	{
        $cat = $this->input->get('cat');
		$download = $this->download_model->get_informasi_setiap_saat();
		$category = $this->download_category_model->get_download_category_by_id($cat);
		$category_name = isset($category->category) ? $category->category : 'INFORMASI SETIAP SAAT';
		
		$output['TITLE'] = strtoupper($category_name);
		$output['DOWNLOAD'] = $download['result'];


		$this->template->view('informasi/informasi_setiap_saat',$output);
    }
    function daftar_informasi_publik(){
		$post = $this->post_model->get_single_post_by_type('informasi_publik');
		$output['TITLE_1'] = 'Daftar Informasi Publik';
		$output['TITLE_2'] = '';
		$output['IMAGE'] = isset($post->post_image) ? $post->post_image : '';
		$output['CONTENT'] = isset($post->post_content) ? $post->post_content : '';
		$this->template->view('file_pdf',$output);
	}
	function ringkasan_akses(){
		$output['TITLE_1'] = 'Ringkasan Akses';
		
        $data = $this->db->query("
            SELECT SUM(bisa) AS bisa,SUM(tidak) AS tidak FROM(
                SELECT COUNT(*) AS bisa, 0 AS tidak
                FROM inbox_permohonan_informasi a LEFT JOIN proses_permohonan_informasi b ON a.noreg=b.noreg WHERE info_publik = 'Kami'
                UNION ALL
                SELECT 0 AS bisa, COUNT(*) AS tidak
                FROM inbox_permohonan_informasi a LEFT JOIN proses_permohonan_informasi b ON a.noreg=b.noreg WHERE info_publik <> 'Kami' OR info_publik IS NULL 
            )X
        ")->row();

		$output['bisa'] = $data->bisa;
		$output['tidak'] = $data->tidak;
		
		
		 $data1 = $this->db->query("
            SELECT COUNT(*) AS pegawai
            FROM inbox_permohonan_informasi a LEFT JOIN proses_permohonan_informasi b ON a.noreg=b.noreg WHERE pekerjaan = 'Pegawai/Dosen'
        ")->row();
        $output['pegawai'] = $data1->pegawai;
        
        $data2 = $this->db->query("
            SELECT COUNT(*) AS ormas
            FROM inbox_permohonan_informasi a LEFT JOIN proses_permohonan_informasi b ON a.noreg=b.noreg WHERE pekerjaan = 'LSM/Ormas/Parpol'
        ")->row();
        $output['ormas'] = $data2->ormas;
        
         $data3 = $this->db->query("
            SELECT COUNT(*) AS pemerintah
            FROM inbox_permohonan_informasi a LEFT JOIN proses_permohonan_informasi b ON a.noreg=b.noreg WHERE pekerjaan = 'Kementerian/Instansi Pemerintah'
        ")->row();
        $output['pemerintah'] = $data3->pemerintah;
        
	    $data4 = $this->db->query("
            SELECT COUNT(*) AS siswa
            FROM inbox_permohonan_informasi a LEFT JOIN proses_permohonan_informasi b ON a.noreg=b.noreg WHERE pekerjaan = 'Pelajar/Mahasiswa'
        ")->row();
        $output['siswa'] = $data4->siswa;
        
	    $data5 = $this->db->query("
            SELECT COUNT(*) AS lainnya
            FROM inbox_permohonan_informasi a LEFT JOIN proses_permohonan_informasi b ON a.noreg=b.noreg WHERE pekerjaan = 'Lainnya'
        ")->row();
        $output['lainnya'] = $data5->lainnya;
        
        
        
	   
        
        
        
        
        
// 		$output['TITLE_2'] = '';
		$this->template->view('informasi/ringkasan_akses',$output);
	}
	function laporan_layanan(){
		$output['TITLE_1'] = 'Laporan Layanan';
// 		$output['TITLE_2'] = '';
		$this->template->view('informasi/laporan_layanan',$output);
	}
    

}
