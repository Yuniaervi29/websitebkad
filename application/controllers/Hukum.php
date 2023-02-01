<?php
class Hukum extends CI_Controller
{
    function __construct()
	{
		parent::__construct();
        $this->load->library('Template');
        $this->load->model('post_model');
        $this->load->model('download_model');
		$this->load->model('download_category_model');
     
	}
	public function undang_undang(){
        $cat = $this->input->get('cat');
		$download = $this->download_model->get_public_undang_undang();
		$category = $this->download_category_model->get_download_category_by_id($cat);
		$category_name = isset($category->category) ? $category->category : 'UNDANG UNDANG';
		
		$output['TITLE'] = strtoupper($category_name);
		$output['DOWNLOAD'] = $download['result'];


		$this->template->view('peraturan/v_peraturan',$output);
    }

    function peraturan_pemerintah()
	{

		$cat = $this->input->get('cat');
		$download = $this->download_model->get_public_peraturan_pemerintah();
		$category = $this->download_category_model->get_download_category_by_id($cat);
		$category_name = isset($category->category) ? out($category->category) : 'PERATURAN PEMERINTAH';
		
		$output['TITLE'] = strtoupper($category_name);
		$output['DOWNLOAD'] = $download['result'];

		$this->template->view('peraturan/v_peraturan',$output);
	}


	function peraturan_presiden()
	{
		
		$cat = $this->input->get('cat');
		$download = $this->download_model->get_public_peraturan_presiden();
		$category = $this->download_category_model->get_download_category_by_id($cat);
		$category_name = isset($category->category) ? out($category->category) : 'PERATURAN PRESIDEN';
		
		$output['TITLE'] = strtoupper($category_name);
		$output['DOWNLOAD'] = $download['result'];

		$this->template->view('peraturan/v_peraturan',$output);
	}


	function peraturan_menteri()
	{

		
		$cat = $this->input->get('cat');
		$download = $this->download_model->get_public_peraturan_menteri();
		$category = $this->download_category_model->get_download_category_by_id($cat);
		$category_name = isset($category->category) ? out($category->category) : 'PERATURAN MENTERI';
		
		$output['TITLE'] = strtoupper($category_name);
		$output['DOWNLOAD'] = $download['result'];

		$this->template->view('peraturan/v_peraturan',$output);
	}


	function peraturan_daerah()
	{

		
		$cat = $this->input->get('cat');
		$download = $this->download_model->get_public_peraturan_daerah();
		$category = $this->download_category_model->get_download_category_by_id($cat);
		$category_name = isset($category->category) ? out($category->category) : 'PERATURAN DAERAH';
		
		$output['TITLE'] = strtoupper($category_name);
		$output['DOWNLOAD'] = $download['result'];

		$this->template->view('peraturan/v_peraturan',$output);
	}


	function peraturan_gubernur()
	{

		
		$cat = $this->input->get('cat');
		$download = $this->download_model->get_public_peraturan_gubernur();
		$category = $this->download_category_model->get_download_category_by_id($cat);
		$category_name = isset($category->category) ? out($category->category) : 'PERATURAN GUBERNUR';
		
		$output['TITLE'] = strtoupper($category_name);
		$output['DOWNLOAD'] = $download['result'];

		$this->template->view('peraturan/v_peraturan',$output);
	}


	function keputusan_gubernur()
	{

		$cat = $this->input->get('cat');
		$download = $this->download_model->get_public_keputusan_gubernur();
		$category = $this->download_category_model->get_download_category_by_id($cat);
		$category_name = isset($category->category) ? out($category->category) : 'KEPUTUSAN GUBERNUR';
		
		$output['TITLE'] = strtoupper($category_name);
		$output['DOWNLOAD'] = $download['result'];

		$this->template->view('peraturan/v_peraturan',$output);
	}

	function instruksi_gubernur()
	{
		
		$cat = $this->input->get('cat');
		$download = $this->download_model->get_public_instruksi_gubernur();
		$category = $this->download_category_model->get_download_category_by_id($cat);
		$category_name = isset($category->category) ? out($category->category) : 'Keputusan Kepala BKAD';
		
		$output['TITLE'] = strtoupper($category_name);
		$output['DOWNLOAD'] = $download['result'];

		$this->template->view('peraturan/v_peraturan',$output);
	}

	function surat_edaran_bpkd()
	{

		$cat = $this->input->get('cat');
		$download = $this->download_model->get_public_surat_edaran_bpkd();
		$category = $this->download_category_model->get_download_category_by_id($cat);
		$category_name = isset($category->category) ? out($category->category) : 'SURAT EDARAN BPKD';
		
		$output['TITLE'] = strtoupper($category_name);
		$output['DOWNLOAD'] = $download['result'];

        $this->template->view('peraturan/v_peraturan',$output);
	}

}
