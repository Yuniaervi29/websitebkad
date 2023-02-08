<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Profil extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		 $this->load->database();

		$this->load->model('master_model');
        $this->load->model('grafik_model');
        $this->load->model('profil_model'); 
		$this->load->model('album_model');
		

		$this->load->model('post_model');
		$this->load->library('Template');
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
		
		//NON
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
		
		$output['TITLE_1'] = 'PROFIL';
		$output['TITLE_2'] = 'STATISTIK KEPEGAWAIAN';
		$this->template->view('info_pegawai',$output);
// 		$output['PAGE_TITLE'] = 'GRAFIK INFO KEPEGAWAIAN';
// 		$this->admin->view('admin/info_peg', $output);
	}
	
	function sejarah_singkat(){
		$post = $this->post_model->get_single_post_by_type('sejarah_singkat');
		$output['TITLE_1'] = 'SEJARAH SINGKAT';
		$output['TITLE_2'] = '';
		$output['IMAGE'] = isset($post->post_image) ? $post->post_image : '';
		$output['CONTENT'] = isset($post->post_content) ? $post->post_content : '';
		$this->template->view('profil',$output);
	}
	
	function visi_misi(){
		$post = $this->post_model->get_single_post_by_type('visi_misi');
		$output['TITLE_1'] = 'VISI & MISI';
		$output['TITLE_2'] = '';
		$output['IMAGE'] = isset($post->post_image) ? $post->post_image : '';
		$output['CONTENT'] = isset($post->post_content) ? $post->post_content : '';
		$this->template->view('profil',$output);
	}
	
	
	
	function profil_ppid(){
		$post = $this->post_model->get_single_post_by_type('profil_ppid');
		$output['TITLE_1'] = 'PPID';
		$output['TITLE_2'] = '';
		$output['IMAGE'] = isset($post->post_image) ? $post->post_image : '';
		$output['CONTENT'] = isset($post->post_content) ? $post->post_content : '';
		$this->template->view('profil',$output);
	}
	
	function agenda_kegiatan(){
		$output['TITLE_1'] = 'PROFIL';
		$output['TITLE_2'] = 'Agenda Kegiatan BKAD Sul-Sel';
		$this->template->view('agenda_kegiatan',$output);
	}
	
	function info_pegawai(){
		$output['TITLE_1'] = 'PROFIL';
		$output['TITLE_2'] = 'STATISTIK KEPEGAWAIAN';
		
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
		
		//NON
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
		
		$this->template->view('info_pegawai',$output);
	}
	
	function info_keuangan(){
		$output['TITLE_1'] = 'PROFIL';
		$output['TITLE_2'] = 'STATISTIK KEUANGAN';
		$this->template->view('info_keuangan',$output);
	}
	function info_aset(){
		$output['TITLE_1'] = 'PROFIL';
		$output['TITLE_2'] = 'STATISTIK ASET';
		$this->template->view('info_aset',$output);
	}
	
	function maklumat(){
		$post = $this->post_model->get_single_post_by_type('maklumat');
		$output['TITLE_1'] = 'PPID';
		$output['TITLE_2'] = 'Maklumat Pelayanan Informasi Publik BKAD Sul-Sel';
		$output['IMAGE'] = isset($post->post_image) ? $post->post_image : '';
		$output['CONTENT'] = isset($post->post_content) ? $post->post_content : '';
		$this->template->view('profil',$output);
	}
	
	function prosedur_informasi(){
		$post = $this->post_model->get_single_post_by_type('prosedur_informasi');
		$output['TITLE_1'] = 'Prosedur Permohonan Informasi';
		$output['TITLE_2'] = '';
		$output['IMAGE'] = isset($post->post_image) ? $post->post_image : '';
		$output['CONTENT'] = isset($post->post_content) ? $post->post_content : '';
		$this->template->view('profil',$output);
	}
	
	function prosedur_keberatan(){
		$post = $this->post_model->get_single_post_by_type('prosedur_keberatan');
		$output['TITLE_1'] = 'Prosedur Pengajuan Keberatan';
		$output['TITLE_2'] = '';
		$output['IMAGE'] = isset($post->post_image) ? $post->post_image : '';
		$output['CONTENT'] = isset($post->post_content) ? $post->post_content : '';
		$this->template->view('profil',$output);
	}
	
	function jadwal(){
		$post = $this->post_model->get_single_post_by_type('jadwal');
		$output['TITLE_1'] = 'Jadwal dan Biaya Pelayanan';
		$output['TITLE_2'] = '';
		$output['IMAGE'] = isset($post->post_image) ? $post->post_image : '';
		$output['CONTENT'] = isset($post->post_content) ? $post->post_content : '';
		$this->template->view('profil',$output);
	}
	
	function permohonan_informasi(){
	    $output['TITLE_1'] = 'PERMOHONAN INFORMASI PUBLIK';
		$output['IMAGE'] = isset($post->post_image) ? $post->post_image : '';
		$this->template->view('permohonan_informasi',$output);
	}
	
	 function cetak2(){
		
// 		$noreg = $this->uri->segment(3);
		
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
        
		$html = $this->load->view('cetakan_permohonan_informasi2',$this->data, true);	    
        // echo $html;
        // run dompdf
        $this->pdfgenerator->generate($html, $file_pdf,$paper,$orientation);
	}
	
	 function cetak3(){
		
// 		$noreg = $this->uri->segment(3);
		
		// panggil library yang kita buat sebelumnya yang bernama pdfgenerator
        $this->load->library('pdfgenerator');
        
        // title dari pdf
        $this->data['title_pdf'] = 'FORMULIR-PERMOHONAN-PENGAJUAN-KEBERATAN';
        
        // filename dari pdf ketika didownload
        $file_pdf = 'FORMULIR-PENGAJUAN-KEBERATAN';
        // setting paper
        $paper = 'A4';
        //orientasi paper potrait / landscape
        $orientation = "portrait";
        
		$html = $this->load->view('cetakan_keberatan2',$this->data, true);	    
        // echo $html;
        // run dompdf
        $this->pdfgenerator->generate($html, $file_pdf,$paper,$orientation);
	}
	
	function pengajuan_keberatan(){
	    $output['TITLE_1'] = 'PENGAJUAN KEBERATAN';
		$output['IMAGE'] = isset($post->post_image) ? $post->post_image : '';
		$this->template->view('pengajuan_keberatan',$output);
	}
	
	
	function struktur_ppid(){
		$post = $this->post_model->get_single_post_by_type('struktur_ppid');
		$output['TITLE_1'] = 'PPID';
		$output['TITLE_2'] = '';
		$output['IMAGE'] = isset($post->post_image) ? $post->post_image : '';
		$output['CONTENT'] = isset($post->post_content) ? $post->post_content : '';
		$this->template->view('profil',$output);
	}

	function tujuan_sasaran(){
		$post = $this->post_model->get_single_post_by_type('tujuan_sasaran');
		$output['TITLE_1'] = 'Tujuan & Sasaran BKAD';
		$output['TITLE_2'] =  '';
		$output['IMAGE'] = isset($post->post_image) ? $post->post_image : '';
		$output['CONTENT'] = isset($post->post_content) ? $post->post_content : '';
		$this->template->view('profil',$output);
	}
	function pegawai(){
// 		$post = $this->post_model->get_single_post_by_type('tujuan_sasaran');
// 		$output['TITLE_1'] = 'Tujuan & Sasaran BKAD';
// 		$output['TITLE_2'] =  '';
// 		$output['IMAGE'] = isset($post->post_image) ? $post->post_image : '';
// 		$output['CONTENT'] = isset($post->post_content) ? $post->post_content : '';
		$this->template->view('pegawai');
	}

	function struktur_organisasi(){
		$sql1 = $this->db->query("SELECT * FROM struktur_org WHERE jab_s like '%KEPALA BADAN%'")->row();
		$output['KABAN'] = $sql1;
		
		$sql1 = $this->db->query("SELECT * FROM struktur_org WHERE jab_s like '%SEKRETARIS%'")->row();
		$output['SEKRETARIS'] = $sql1;
		
		$sql1 = $this->db->query("SELECT * FROM struktur_org WHERE jab_s like '%Kasubag Program%'")->row();
		$output['KASUBAG_P'] = $sql1;
		
		$sql1 = $this->db->query("SELECT * FROM struktur_org WHERE jab_s like '%Kasubag Umum, Kepegawaian dan Hukum%'")->row();
		$output['KASUBAG_U'] = $sql1;
		
		$sql1 = $this->db->query("SELECT * FROM struktur_org WHERE jab_s like '%Kasubag Keuangan%'")->row();
		$output['KASUBAG_K'] = $sql1;
		
		$output['kabid_ang'] = $this->db->query("SELECT * FROM struktur_org WHERE jab_s like '%Kabid Perencanaan Anggaran%'")->row();
		$output['kasubid_ang1'] = $this->db->query("SELECT * FROM struktur_org WHERE jab_s like '%Kasubid Perencanaan Anggaran Wil.I%' LIMIT 1")->row();
		$output['kasubid_ang2'] = $this->db->query("SELECT * FROM struktur_org WHERE jab_s like '%Kasubid Perencanaan Anggaran Wil.II%' LIMIT 1")->row();
		$output['kasubid_ang3'] = $this->db->query("SELECT * FROM struktur_org WHERE jab_s like '%Kasubid Perencanaan Anggaran Wil.III%' LIMIT 1")->row();
		
		$output['kabid_perbend'] = $this->db->query("SELECT * FROM struktur_org WHERE jab_s like '%Kabid Perbendaharaan%'")->row();
		$output['kasubid_perbend1'] = $this->db->query("SELECT * FROM struktur_org WHERE jab_s like '%Kasubid Perbendaharaan Wil.I%' LIMIT 1")->row();
		$output['kasubid_perbend2'] = $this->db->query("SELECT * FROM struktur_org WHERE jab_s like '%Kasubid Perbendaharaan Wil.II%' LIMIT 1")->row();
		$output['kasubid_perbend3'] = $this->db->query("SELECT * FROM struktur_org WHERE jab_s like '%Kasubid Perbendaharaan Wil.III%' LIMIT 1")->row();
		
		$output['kabid_akt'] = $this->db->query("SELECT * FROM struktur_org WHERE jab_s like '%Kabid Akuntansi dan Pelaporan Keuangan%'")->row();
		$output['kasubid_akt1'] = $this->db->query("SELECT * FROM struktur_org WHERE jab_s like '%Kasubid Akuntansi & Pelaporan Keuangan Wil.I%' LIMIT 1")->row();
		$output['kasubid_akt2'] = $this->db->query("SELECT * FROM struktur_org WHERE jab_s like '%Kasubid Akuntansi & Pelaporan Keuangan Wil.II%' LIMIT 1")->row();
		$output['kasubid_akt3'] = $this->db->query("SELECT * FROM struktur_org WHERE jab_s like '%Kasubid Akuntansi & Pelaporan Keuangan Wil.III%' LIMIT 1")->row();
		
		$output['kabid_brg'] = $this->db->query("SELECT * FROM struktur_org WHERE jab_s like '%Kabid Pengelolaan Barang Milik Daerah%'")->row();
		$output['kasubid_brg1'] = $this->db->query("SELECT * FROM struktur_org WHERE jab_s like '%Kasubid Pengelolaan Barang Milik Daerah Wil.I%' LIMIT 1")->row();
		$output['kasubid_brg2'] = $this->db->query("SELECT * FROM struktur_org WHERE jab_s like '%Kasubid Pengelolaan Barang Milik Daerah Wil.II%' LIMIT 1")->row();
		$output['kasubid_brg3'] = $this->db->query("SELECT * FROM struktur_org WHERE jab_s like '%Kasubid Pengelolaan Barang Milik Daerah Wil.III%' LIMIT 1")->row();

		$post = $this->post_model->get_single_post_by_type('struktur organisasi');
		$output['TITLE_1'] = 'PROFIL';
		$output['TITLE_2'] = '';
		$output['IMAGE'] = isset($post->post_image) ? $post->post_image : '';
		$output['CONTENT'] = isset($post->post_content) ? $post->post_content : '';
		$this->template->view('struktur_org',$output);
	}
	
	function pejabat(){
	    $sql1 = $this->db->query("SELECT * FROM struktur_org WHERE jab_s like '%KEPALA BADAN%'")->row();
		$output['KABAN'] = $sql1;
		
		$sql1 = $this->db->query("SELECT * FROM struktur_org WHERE jab_s like '%SEKRETARIS%'")->row();
		$output['SEKRETARIS'] = $sql1;
		
		$sql1 = $this->db->query("SELECT * FROM struktur_org WHERE jab_s like '%Kasubag Program%'")->row();
		$output['KASUBAG_P'] = $sql1;
		
		$sql1 = $this->db->query("SELECT * FROM struktur_org WHERE jab_s like '%Kasubag Umum, Kepegawaian dan Hukum%'")->row();
		$output['KASUBAG_U'] = $sql1;
		
		$sql1 = $this->db->query("SELECT * FROM struktur_org WHERE jab_s like '%Kasubag Keuangan%'")->row();
		$output['KASUBAG_K'] = $sql1;
		
		$output['kabid_ang'] = $this->db->query("SELECT * FROM struktur_org WHERE jab_s like '%Kabid Perencanaan Anggaran%'")->row();
		$output['kasubid_ang1'] = $this->db->query("SELECT * FROM struktur_org WHERE jab_s like '%Kasubid Perencanaan Anggaran Wil.I%' LIMIT 1")->row();
		$output['kasubid_ang2'] = $this->db->query("SELECT * FROM struktur_org WHERE jab_s like '%Kasubid Perencanaan Anggaran Wil.II%' LIMIT 1")->row();
		$output['kasubid_ang3'] = $this->db->query("SELECT * FROM struktur_org WHERE jab_s like '%Kasubid Perencanaan Anggaran Wil.III%' LIMIT 1")->row();
		
		$output['kabid_perbend'] = $this->db->query("SELECT * FROM struktur_org WHERE jab_s like '%Kabid Perbendaharaan%'")->row();
		$output['kasubid_perbend1'] = $this->db->query("SELECT * FROM struktur_org WHERE jab_s like '%Kasubid Perbendaharaan Wil.I%' LIMIT 1")->row();
		$output['kasubid_perbend2'] = $this->db->query("SELECT * FROM struktur_org WHERE jab_s like '%Kasubid Perbendaharaan Wil.II%' LIMIT 1")->row();
		$output['kasubid_perbend3'] = $this->db->query("SELECT * FROM struktur_org WHERE jab_s like '%Kasubid Perbendaharaan Wil.III%' LIMIT 1")->row();
		
		$output['kabid_akt'] = $this->db->query("SELECT * FROM struktur_org WHERE jab_s like '%Kabid Akuntansi dan Pelaporan Keuangan%'")->row();
		$output['kasubid_akt1'] = $this->db->query("SELECT * FROM struktur_org WHERE jab_s like '%Kasubid Akuntansi & Pelaporan Keuangan Wil.I%' LIMIT 1")->row();
		$output['kasubid_akt2'] = $this->db->query("SELECT * FROM struktur_org WHERE jab_s like '%Kasubid Akuntansi & Pelaporan Keuangan Wil.II%' LIMIT 1")->row();
		$output['kasubid_akt3'] = $this->db->query("SELECT * FROM struktur_org WHERE jab_s like '%Kasubid Akuntansi & Pelaporan Keuangan Wil.III%' LIMIT 1")->row();
		
		$output['kabid_brg'] = $this->db->query("SELECT * FROM struktur_org WHERE jab_s like '%Kabid Pengelolaan Barang Milik Daerah%'")->row();
		$output['kasubid_brg1'] = $this->db->query("SELECT * FROM struktur_org WHERE jab_s like '%Kasubid Pengelolaan Barang Milik Daerah Wil.I%' LIMIT 1")->row();
		$output['kasubid_brg2'] = $this->db->query("SELECT * FROM struktur_org WHERE jab_s like '%Kasubid Pengelolaan Barang Milik Daerah Wil.II%' LIMIT 1")->row();
		$output['kasubid_brg3'] = $this->db->query("SELECT * FROM struktur_org WHERE jab_s like '%Kasubid Pengelolaan Barang Milik Daerah Wil.III%' LIMIT 1")->row();

		$post = $this->post_model->get_single_post_by_type('struktur organisasi');
		
	    $output['TITLE_1'] = 'PROFIL PEJABAT';
		$output['IMAGE'] = isset($post->post_image) ? $post->post_image : '';
		
		$this->template->view('pejabat',$output);
	}

	function tugas_pokok(){
		$post = $this->post_model->get_single_post_by_type('tugas_pokok');
		$output['TITLE_1'] = 'Tugas Pokok & Fungsi';
		$output['TITLE_2'] = '';
		$output['IMAGE'] = isset($post->post_image) ? $post->post_image : '';
		$output['CONTENT'] = isset($post->post_content) ? $post->post_content : '';
		$this->template->view('file_pdf',$output);
	}
	function program_kerja(){
		$post = $this->post_model->get_single_post_by_type('program_kerja');
		$output['TITLE_1'] = 'Program Kerja';
		$output['TITLE_2'] = '';
		$output['IMAGE'] = isset($post->post_image) ? $post->post_image : '';
		$output['CONTENT'] = isset($post->post_content) ? $post->post_content : '';
		$this->template->view('file_pdf',$output);
	}
    function pelayanan_publik(){
	    $output['TITLE_1'] = 'PELAYANAN PUBLIK';
	    $output['TITLE_2'] = 'PELAYANAN PUBLIK';
		$output['IMAGE'] = isset($post->post_image) ? $post->post_image : '';
		$this->template->view('pelayanan_publik',$output);
	}
	function penyalahgunaan_wewenang(){
		$output['TITLE_1'] = 'PENYALAHGUNAAN WEWENANG';
	    $output['TITLE_2'] = 'PENYALAHGUNAAN WEWENANG';
		$output['IMAGE'] = isset($post->post_image) ? $post->post_image : '';
		$this->template->view('penyalahgunaan_wewenang',$output);
	}
	
	function kinerja_bkad(){
		$post = $this->post_model->get_single_post_by_type('kinerja');
		$output['TITLE_1'] = 'Kinerja BKAD';
		$output['TITLE_2'] = '';
		$output['IMAGE'] = isset($post->post_image) ? $post->post_image : '';
		$output['CONTENT'] = isset($post->post_content) ? $post->post_content : '';
		$this->template->view('profil',$output);
	}
	
	function layanan(){
		$output['TITLE_1'] = 'Layanan';
		$output['TITLE_2'] = '';
		$this->template->view('layanan',$output);
	}
	function alamatkontak(){
		$output['TITLE_1'] = 'alamatkontak';
		$output['TITLE_2'] = '';
		$this->template->view('alamatkontak',$output);
	}
	function tusibkad(){
		$output['TITLE_1'] = 'tusibkad';
		$output['TITLE_2'] = '';
		$this->template->view('tusibkad',$output);
	}
	function opini(){
		$post = $this->post_model->get_single_post_by_type('opini');
		$output['TITLE_1'] = 'Opini BPK-RI';
		$output['TITLE_2'] = '';
		$output['IMAGE'] = isset($post->post_image) ? $post->post_image : '';
		$output['CONTENT'] = isset($post->post_content) ? $post->post_content : '';
		$this->template->view('file_pdf',$output);
	}
	
	function tugas_pokok_ppid(){
		$post = $this->post_model->get_single_post_by_type('tugas pokok ppid');
		$output['TITLE_1'] = 'PPID';
		$output['TITLE_2'] = 'Tugas Pokok Dan Fungsi PPID';
		$output['IMAGE'] = isset($post->post_image) ? $post->post_image : '';
		$output['CONTENT'] = isset($post->post_content) ? $post->post_content : '';
		$this->template->view('profil',$output);
	}
}