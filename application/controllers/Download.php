<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Download extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('download_model');
        $this->load->model('download_category_model');
        $this->load->library('Template');
	}

	function index()
	{
		$cat = $this->input->get('cat');
		$download = $this->download_model->get_public_download();
		$category = $this->download_category_model->get_download_category_by_id($cat);
		$category_name = isset($category->category) ? $category->category : '';
		
		$output['TITLE'] = strtoupper($category_name);
		$output['DOWNLOAD'] = $download['result'];

		$this->template->view('download/detail_download',$output);
	}

	function perda(){
        $val=$this->input->get('val');
        if($val=='kua') {
            $output['TITLE'] = 'List Dokumen Kebijakan Umum Anggaran (KUA)';
            $query=$this->db->query("SELECT a.category_id,title,a.date,category,a.file, a.jumlah_download FROM download a
            LEFT JOIN ms_category b ON a.category_id=b.category_id WHERE b.jenis='kua' ORDER BY a.date  ASC");
        }else if($val=='ppas'){
            $output['TITLE'] = 'List Dokumen Prioritas dan Plafon Anggaran Sementara';
            $query=$this->db->query("SELECT a.category_id,title,a.date,category,a.file, a.jumlah_download FROM download a
            LEFT JOIN ms_category b ON a.category_id=b.category_id WHERE b.jenis='ppas' ORDER BY a.date  ASC");
        }else if($val=='RKA_SKPD'){
            $output['TITLE'] = 'List Dokumen Ringkasan Dokumen Rencana Kegiatan dan Anggaran SKPD';
            $query=$this->db->query("SELECT a.category_id,title,a.date,category,a.file, a.jumlah_download FROM download a
            LEFT JOIN ms_category b ON a.category_id=b.category_id WHERE b.jenis='RKA_SKPD' ORDER BY a.date  ASC");
        }else if($val=='RKA_PPKD'){
            $output['TITLE'] = 'List Dokumen RKA / RKAP';
            $query=$this->db->query("SELECT a.category_id,title,a.date,category,a.file, a.jumlah_download FROM download a
            LEFT JOIN ms_category b ON a.category_id=b.category_id WHERE b.jenis='RKA_PPKD' ORDER BY a.date  ASC");
        }else if($val=='RANPERDA_APBD'){
            $output['TITLE'] = 'List Dokumen Ringkasan Dokumen Rancangan Peraturan Daerah Tentang APBD ';
            $query=$this->db->query("SELECT a.category_id,title,a.date,category,a.file, a.jumlah_download FROM download a
            LEFT JOIN ms_category b ON a.category_id=b.category_id WHERE b.jenis='RANPERDA_APBD' ORDER BY a.date  ASC");
        }else if($val=='PERDA_APBD'){
            $output['TITLE'] = 'List Dokumen Peraturan Daerah Tentang Anggaran Pendapatan dan Belanja Daerah';
            $query=$this->db->query("SELECT a.category_id,title,a.date,category,a.file, a.jumlah_download FROM download a
            LEFT JOIN ms_category b ON a.category_id=b.category_id WHERE b.jenis='PERDA_APBD' ORDER BY a.date  ASC");
        }else if($val=='PERKADA_APBD'){
            $output['TITLE'] = 'List Dokumen Peraturan Kepala Daerah Tentang Penjabaran APBD ';
            $query=$this->db->query("SELECT a.category_id,title,a.date,category,a.file, a.jumlah_download FROM download a
            LEFT JOIN ms_category b ON a.category_id=b.category_id WHERE b.jenis='PERKADA_APBD' ORDER BY a.date  ASC");
        }else if($val=='DPA_SKPD'){
            $output['TITLE'] = 'List Dokumen Pelaksanaan Anggaran SKPD ';
            $query=$this->db->query("SELECT a.category_id,title,a.date,category,a.file, a.jumlah_download FROM download a
            LEFT JOIN ms_category b ON a.category_id=b.category_id WHERE b.jenis='DPA_SKPD' ORDER BY a.date  ASC");
        }else if($val=='DPA_PPKD'){
            $output['TITLE'] = 'List Dokumen Pelaksanaan Anggaran PPKD';
            $query=$this->db->query("SELECT a.category_id,title,a.date,category,a.file, a.jumlah_download FROM download a
            LEFT JOIN ms_category b ON a.category_id=b.category_id WHERE b.jenis='DPA_PPKD' ORDER BY a.date  ASC");
        }else if($val=='RANPERDA_PERUBAHAN_APBD'){
            $output['TITLE'] = 'List Dokumen Ringkasan Dokumen Rancangan Peraturan Daerah Tentang Perubahan APBD';
            $query=$this->db->query("SELECT a.category_id,title,a.date,category,a.file, a.jumlah_download FROM download a
            LEFT JOIN ms_category b ON a.category_id=b.category_id WHERE b.jenis='RANPERDA_PERUBAHAN_APBD' ORDER BY a.date  ASC");
        }else if($val=='PERDA_PERUBAHAN_APBD'){
            $output['TITLE'] = 'List Dokumen  Peraturan Daerah Tentang Perubahan Anggaran Pendapatan dan Belanja Daerah';
            $query=$this->db->query("SELECT a.category_id,title,a.date,category,a.file, a.jumlah_download FROM download a
            LEFT JOIN ms_category b ON a.category_id=b.category_id WHERE b.jenis='PERDA_PERUBAHAN_APBD' ORDER BY a.date  ASC");
        }else if($val=='PERKADA_PERUBAHAN_APBD'){
            $output['TITLE'] = 'List Dokumen Peraturan Kepala Daerah Tentang Penjabaran Perubahan APBD';
            $query=$this->db->query("SELECT a.category_id,title,a.date,category,a.file, a.jumlah_download FROM download a
            LEFT JOIN ms_category b ON a.category_id=b.category_id WHERE b.jenis='PERKADA_PERUBAHAN_APBD' ORDER BY a.date  ASC");
        }else if($val=='RKAP_SKPD'){
            $output['TITLE'] = 'List Dokumen Ringkasan Dokumen Rencana Kegiatan dan Anggaran Perubahan SKPD';
            $query=$this->db->query("SELECT a.category_id,title,a.date,category,a.file, a.jumlah_download FROM download a
            LEFT JOIN ms_category b ON a.category_id=b.category_id WHERE b.jenis='RKAP_SKPD' ORDER BY a.date  ASC");
        }else if($val=='DPPA_SKPD'){
            $output['TITLE'] = 'List Dokumen Ringkasan Dokumen Pelaksanaan Perubahan Anggaran SKPD';
            $query=$this->db->query("SELECT a.category_id,title,a.date,category,a.file, a.jumlah_download FROM download a
            LEFT JOIN ms_category b ON a.category_id=b.category_id WHERE b.jenis='DPPA_SKPD' ORDER BY a.date  ASC");
        }else if($val=='SK_PPKD'){
            $output['TITLE'] = 'List Dokumen SK Kepala Daerah Tentang Pejabat Pengelola Keuangan Daerah';
            $query=$this->db->query("SELECT a.category_id,title,a.date,category,a.file, a.jumlah_download FROM download a
            LEFT JOIN ms_category b ON a.category_id=b.category_id WHERE b.jenis='SK_PPKD' ORDER BY a.date  ASC");
        }else if($val=='REALISASI_PENDAPATAN_DAERAH'){
            $output['TITLE'] = 'List Dokumen Realisasi Pendapatan Daerah';
            $query=$this->db->query("SELECT a.category_id,title,a.date,category,a.file, a.jumlah_download FROM download a
            LEFT JOIN ms_category b ON a.category_id=b.category_id WHERE b.jenis='REALISASI_PENDAPATAN_DAERAH' ORDER BY a.date  ASC");
        }else if($val=='REALISASI_BELANJA_DAERAH'){
            $output['TITLE'] = 'List Dokumen Realisasi Belanja Daerah';
            $query=$this->db->query("SELECT a.category_id,title,a.date,category,a.file, a.jumlah_download FROM download a
            LEFT JOIN ms_category b ON a.category_id=b.category_id WHERE b.jenis='REALISASI_BELANJA_DAERAH' ORDER BY a.date  ASC");
        }else if($val=='REALISASI_PEMBIAYAAN_DAERAH'){
            $output['TITLE'] = 'List Dokumen Realisasi Pembiayaan Daerah ';
            $query=$this->db->query("SELECT a.category_id,title,a.date,category,a.file, a.jumlah_download FROM download a
            LEFT JOIN ms_category b ON a.category_id=b.category_id WHERE b.jenis='REALISASI_PEMBIAYAAN_DAERAH' ORDER BY a.date  ASC");
        }else if($val=='PERKADA_KEBIJAKAN_AKUNTANSI'){
            $output['TITLE'] = 'List Dokumen Peraturan Kepala Daerah Tentang Kebijakan Akuntansi';
            $query=$this->db->query("SELECT a.category_id,title,a.date,category,a.file, a.jumlah_download FROM download a
            LEFT JOIN ms_category b ON a.category_id=b.category_id WHERE b.jenis='PERKADA_KEBIJAKAN_AKUNTANSI' ORDER BY a.date  ASC");
        }else if($val=='lak'){
            $output['TITLE'] = 'List Dokumen Laporan Arus Kas';
            $query=$this->db->query("SELECT a.category_id,title,a.date,category,a.file, a.jumlah_download FROM download a
            LEFT JOIN ms_category b ON a.category_id=b.category_id WHERE b.jenis='lak' ORDER BY a.date  ASC");
        }else if($val=='lo'){
            $output['TITLE'] = 'List Dokumen Laporan Opersional ';
            $query=$this->db->query("SELECT a.category_id,title,a.date,category,a.file, a.jumlah_download FROM download a
            LEFT JOIN ms_category b ON a.category_id=b.category_id WHERE b.jenis='lo' ORDER BY a.date  ASC");
        }else if($val=='lpe'){
            $output['TITLE'] = 'List Dokumen Laporan Perubahan Ekuitas ';
            $query=$this->db->query("SELECT a.category_id,title,a.date,category,a.file, a.jumlah_download FROM download a
            LEFT JOIN ms_category b ON a.category_id=b.category_id WHERE b.jenis='lpe' ORDER BY a.date  ASC");
        }else if($val=='LRA_SKPD'){
            $output['TITLE'] = 'List Dokumen Laporan Realisasi Anggaran Seluruh SKPD';
            $query=$this->db->query("SELECT a.category_id,title,a.date,category,a.file, a.jumlah_download FROM download a
            LEFT JOIN ms_category b ON a.category_id=b.category_id WHERE b.jenis='LRA_SKPD' ORDER BY a.date  ASC");
        }else if($val=='LRA_PPKD'){
            $output['TITLE'] = 'List Dokumen Laporan Realisasi Anggaran PPKD ';
            $query=$this->db->query("SELECT a.category_id,title,a.date,category,a.file, a.jumlah_download FROM download a
            LEFT JOIN ms_category b ON a.category_id=b.category_id WHERE b.jenis='LRA_PPKD' ORDER BY a.date  ASC");
        }else if($val=='neraca'){
            $output['TITLE'] = 'List Dokumen  Laporan Posisi Keuangan ';
            $query=$this->db->query("SELECT a.category_id,title,a.date,category,a.file, a.jumlah_download FROM download a
            LEFT JOIN ms_category b ON a.category_id=b.category_id WHERE b.jenis='neraca' ORDER BY a.date  ASC");
        }else if($val=='calk'){
            $output['TITLE'] = 'List Dokumen Catatan Atas Laporan Keuangan (CaLK)';
            $query=$this->db->query("SELECT a.category_id,title,a.date,category,a.file, a.jumlah_download FROM download a
            LEFT JOIN ms_category b ON a.category_id=b.category_id WHERE b.jenis='calk' ORDER BY a.date  ASC");
        }else if($val=='PERDA_PERTANGGUNGJAWABAN'){
            $output['TITLE'] = 'List Dokumen Penetapan Perda Pertanggungjawaban Pelaksanaan APBD';
            $query=$this->db->query("SELECT a.category_id,title,a.date,category,a.file, a.jumlah_download FROM download a
            LEFT JOIN ms_category b ON a.category_id=b.category_id WHERE b.jenis='PERDA_PERTANGGUNGJAWABAN' ORDER BY a.date  ASC");
        }else if($val=='renstra'){
            $output['TITLE'] = 'List Dokumen RENSTRA';
            $query=$this->db->query("SELECT a.category_id,title,a.date,category,a.file, a.jumlah_download FROM download a
            LEFT JOIN ms_category b ON a.category_id=b.category_id WHERE b.jenis='renstra' ORDER BY a.date  ASC");
        }else if($val=='renja'){
            $output['TITLE'] = 'List Dokumen RENJA';
            $query=$this->db->query("SELECT a.category_id,title,a.date,category,a.file, a.jumlah_download FROM download a
            LEFT JOIN ms_category b ON a.category_id=b.category_id WHERE b.jenis='renja' ORDER BY a.date  ASC");
        }else if($val=='iku'){
            $output['TITLE'] = 'List Dokumen Indikator Kinerja Utama ';
            $query=$this->db->query("SELECT a.category_id,title,a.date,category,a.file, a.jumlah_download FROM download a
            LEFT JOIN ms_category b ON a.category_id=b.category_id WHERE b.jenis='iku' ORDER BY a.date  ASC");
        }else if($val=='PERJANJIAN_KINERJA'){
            $output['TITLE'] = 'List Dokumen Perjanjian Kinerja';
            $query=$this->db->query("SELECT a.category_id,title,a.date,category,a.file , a.jumlah_download FROM download a
            LEFT JOIN ms_category b ON a.category_id=b.category_id WHERE b.jenis='PERJANJIAN_KINERJA' ORDER BY a.date  ASC");
        }else if($val=='PENGUKURAN_KINERJA'){
            $output['TITLE'] = 'List Dokumen Pengukuran Kinerja';
            $query=$this->db->query("SELECT a.category_id,title,a.date,category,a.file, a.jumlah_download FROM download a
            LEFT JOIN ms_category b ON a.category_id=b.category_id WHERE b.jenis='PENGUKURAN_KINERJA' ORDER BY a.date  ASC");
        }else if($val=='RENCANA_AKSI'){
            $output['TITLE'] = 'List Dokumen Rencana Aksi';
            $query=$this->db->query("SELECT a.category_id,title,a.date,category,a.file, a.jumlah_download FROM download a
            LEFT JOIN ms_category b ON a.category_id=b.category_id WHERE b.jenis='RENCANA_AKSI' ORDER BY a.date  ASC");
        }else if($val=='MONITORING_RENCANA_AKSI'){
            $output['TITLE'] = 'List Dokumen Monitoring dan Evaluasi Capaian Rencana Aksi';
            $query=$this->db->query("SELECT a.category_id,title,a.date,category,a.file, a.jumlah_download FROM download a
            LEFT JOIN ms_category b ON a.category_id=b.category_id WHERE b.jenis='MONITORING_RENCANA_AKSI' ORDER BY a.date  ASC");
        }else if($val=='lhpk'){
            $output['TITLE'] = 'List Dokumen Laporan Hasil Pelaksanaan Kegiatan';
            $query=$this->db->query("SELECT a.category_id,title,a.date,category,a.file, a.jumlah_download FROM download a
            LEFT JOIN ms_category b ON a.category_id=b.category_id WHERE b.jenis='lhpk' ORDER BY a.date  ASC");
        }else if($val=='lraf'){
            $output['TITLE'] = 'List Dokumen Laporan Realisasi Anggaran dan Fisik Kegiatan';
            $query=$this->db->query("SELECT a.category_id,title,a.date,category,a.file, a.jumlah_download FROM download a
            LEFT JOIN ms_category b ON a.category_id=b.category_id WHERE b.jenis='lraf' ORDER BY a.date  ASC");
        }else if($val=='LAPORAN_EVALUASI_RENJA'){
            $output['TITLE'] = 'List Dokumen Evaluasi Pelaksanaan Rencana Kerja';
            $query=$this->db->query("SELECT a.category_id,title,a.date,category,a.file, a.jumlah_download FROM download a
            LEFT JOIN ms_category b ON a.category_id=b.category_id WHERE b.jenis='LAPORAN_EVALUASI_RENJA' ORDER BY a.date  ASC");
        }else if($val=='LKj_IP'){
            $output['TITLE'] = 'List Dokumen Laporan Kinerja Instansi Pemerintah';
            $query=$this->db->query("SELECT a.category_id,title,a.date,category,a.file, a.jumlah_download FROM download a
            LEFT JOIN ms_category b ON a.category_id=b.category_id WHERE b.jenis='LKj_IP' ORDER BY a.date  ASC");
        }else if($val=='lkpj'){
            $output['TITLE'] = 'List Dokumen Laporan Keterangan Pertanggungjawaban';
            $query=$this->db->query("SELECT a.category_id,title,a.date,category,a.file, a.jumlah_download FROM download a
            LEFT JOIN ms_category b ON a.category_id=b.category_id WHERE b.jenis='lkpj' ORDER BY a.date  ASC");
        }else if($val=='lppd'){
            $output['TITLE'] = 'List Dokumen Laporan Penyelenggaraan Pemerintah Daerah';
            $query=$this->db->query("SELECT a.category_id,title,a.date,category,a.file, a.jumlah_download FROM download a
            LEFT JOIN ms_category b ON a.category_id=b.category_id WHERE b.jenis='lppd' ORDER BY a.date  ASC");
        }else if($val=='LAPORAN_GWPP'){
            $output['TITLE'] = 'List Dokumen Laporan Gubernur Selaku Wakil Pemerintah Pusat';
            $query=$this->db->query("SELECT a.category_id,title,a.date,category,a.file, a.jumlah_download FROM download a
            LEFT JOIN ms_category b ON a.category_id=b.category_id WHERE b.jenis='LAPORAN_GWPP' ORDER BY a.date  ASC");
        }else if($val=='probis'){
            $output['TITLE'] = 'List Dokumen Dokumen Peta Proses Bisnis ';
            $query=$this->db->query("SELECT a.category_id,title,a.date,category,a.file, a.jumlah_download FROM download a
            LEFT JOIN ms_category b ON a.category_id=b.category_id WHERE b.jenis='probis' ORDER BY a.date  ASC");
        }else if($val=='sop'){
            $output['TITLE'] = 'List Dokumen Standar Operasional Prosedur';
            $query=$this->db->query("SELECT a.category_id,title,a.date,category,a.file, a.jumlah_download FROM download a
            LEFT JOIN ms_category b ON a.category_id=b.category_id WHERE b.jenis='sop' ORDER BY a.date  ASC");
        }else if($val=='duk'){
            $output['TITLE'] = 'List Dokumen Daftar Urut Kepangkatan';
            $query=$this->db->query("SELECT a.category_id,title,a.date,category,a.file, a.jumlah_download FROM download a
            LEFT JOIN ms_category b ON a.category_id=b.category_id WHERE b.jenis='duk' ORDER BY a.date  ASC");
        }else if($val=='rkbmd'){
            $output['TITLE'] = 'List Dokumen Rencana Kebutuhan Barang Milik Daerah ';
            $query=$this->db->query("SELECT a.category_id,title,a.date,category,a.file, a.jumlah_download FROM download a
            LEFT JOIN ms_category b ON a.category_id=b.category_id WHERE b.jenis='rkbmd' ORDER BY a.date  ASC");
        }else if($val=='rup'){
            $output['TITLE'] = 'List Dokumen Rencana Umum Pengadaan';
            $query=$this->db->query("SELECT a.category_id,title,a.date,category,a.file, a.jumlah_download FROM download a
            LEFT JOIN ms_category b ON a.category_id=b.category_id WHERE b.jenis='rup' ORDER BY a.date  ASC");
        }else if($val=='RINGKASAN_APBD'){
            $output['TITLE'] = 'List Dokumen Ringkasan Anggaran Pendapatan dan Belanja Daerah';
            $query=$this->db->query("SELECT a.category_id,title,a.date,category,a.file, a.jumlah_download FROM download a
            LEFT JOIN ms_category b ON a.category_id=b.category_id WHERE b.jenis='RINGKASAN_APBD' ORDER BY a.date  ASC");
        }else if($val=='RINGKASAN_PERUBAHAN_APBD'){
            $output['TITLE'] = 'List Dokumen Ringkasan Anggaran Pendapatan dan Belanja Daerah';
            $query=$this->db->query("SELECT a.category_id,title,a.date,category,a.file, a.jumlah_download FROM download a
            LEFT JOIN ms_category b ON a.category_id=b.category_id WHERE b.jenis='RINGKASAN_PERUBAHAN_APBD' ORDER BY a.date  ASC");
        }else if($val=='RINGKASAN_REALISASI_APBD'){
            $output['TITLE'] = 'List Dokumen Ringkasan Realisasi Anggaran Pendapatan dan Belanja Daerah';
            $query=$this->db->query("SELECT a.category_id,title,a.date,category,a.file, a.jumlah_download FROM download a
            LEFT JOIN ms_category b ON a.category_id=b.category_id WHERE b.jenis='RINGKASAN_REALISASI_APBD' ORDER BY a.date  ASC");
        }else if($val=='RINCIAN_REALISASI_APBD'){
            $output['TITLE'] = 'List Dokumen Rincian Realisasi Anggaran Pendapatan dan Belanja Daerah';
            $query=$this->db->query("SELECT a.category_id,title,a.date,category,a.file, a.jumlah_download FROM download a
            LEFT JOIN ms_category b ON a.category_id=b.category_id WHERE b.jenis='RINCIAN_REALISASI_APBD' ORDER BY a.date  ASC");
        }else if($val=='KONTRAK_PENGADAAN_BARANG_DAN_JASA'){
            $output['TITLE'] = 'List Dokumen Realisasi Pengadaan Barang dan Jasa ';
            $query=$this->db->query("SELECT a.category_id,title,a.date,category,a.file, a.jumlah_download FROM download a
            LEFT JOIN ms_category b ON a.category_id=b.category_id WHERE b.jenis='KONTRAK_PENGADAAN_BARANG_DAN_JASA' ORDER BY a.date  ASC");
        }else if($val=='LAPORAN_LAYANAN_INFORMASI_PUBLIK'){
            $output['TITLE'] = 'List Dokumen Layanan Informasi Publik';
            $query=$this->db->query("SELECT a.category_id,title,a.date,category,a.file, a.jumlah_download FROM download a
            LEFT JOIN ms_category b ON a.category_id=b.category_id WHERE b.jenis='LAPORAN_LAYANAN_INFORMASI_PUBLIK' ORDER BY a.date  ASC");
        }else if($val=='OPINI_BPK_RI'){
            $output['TITLE'] = 'List Dokumen Hasil Pemeriksaan Laporan Keuangan Pemerintah Daerah';
            $query=$this->db->query("SELECT a.category_id,title,a.date,category,a.file , a.jumlah_download FROM download a
            LEFT JOIN ms_category b ON a.category_id=b.category_id WHERE b.jenis='OPINI_BPK_RI' ORDER BY a.date  ASC");
        }
       
        $output['PERDA']=$query->result();
		$this->template->view('download/download',$output);
	}
	function ambil_file(){
	    $dir="uploads/file/";
        $filename=$_GET['nm_file'];
        $file_path=$dir.$filename;
        $ctype="application/octet-stream";
        if(!empty($file_path) && file_exists($file_path)){ 
           header("Pragma:public");
           header("Expired:0");
           header("Cache-Control:must-revalidate");
           header("Content-Control:public");
           header("Content-Description: File Transfer");
           header("Content-Type: $ctype");
           header("Content-Disposition:attachment; filename=\"".basename($file_path)."\"");
           header("Content-Transfer-Encoding:binary");
           header("Content-Length:".filesize($file_path));
           flush();
          readfile($file_path);
          $this->db->query("update download set jumlah_download=ifnull(jumlah_download,0)+1 where file='$filename'");
           exit();
        }else{
           echo "The File does not exist.";
        }
    }
	

}