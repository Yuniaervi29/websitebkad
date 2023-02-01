<?php

class Kategori extends CI_Controller {

	function __construct()
	{
		parent::__construct();
        $this->load->library('Admin');
		$this->load->model('master_model');
		$this->load->model('user_model');
		$this->load->model('download_category_model');

        if($this->session->userdata('status')!='login'){
			redirect(base_url("admin/login"));
		}
	}

	function index()
	{
        $post = $this->download_category_model->get_category();
        $output['POST'] = $post['result'];
		$output['PAGE_TITLE'] = 'KATEGORI';
		$this->admin->view('admin/kategori', $output);
	}

	function json()
	{
		$download_category = $this->download_category_model->get_category();
		$tmp = array();
		$tmp['total'] = $download_category['num_rows'];
		$tmp['rows'] = $download_category['result'];
		
		echo json_encode($tmp);
	}

	function add()
	{
		if (!isset($_POST['category']))
		{
            $output['EDIT'] = array(
                "status" => "add",
                "category_id" => "",
                "category" => "",
                "jenis" => "",
            ); 
			
			$this->admin->view('admin/kategori_form', $output);
		}
		else
		{
			$data['category_id']	= '';
			$data['category']		= $this->input->post('category');
			$data['jenis']		= $this->input->post('jenis');
			$this->download_category_model->insert_category($data);

			$this->session->set_userdata('message','Data telah tersimpan.');
			$this->session->set_userdata('message_type','success');

			$this->index();
		}
	}

	function edit()
	{
		$id = $this->uri->segment(4);
		if (!isset($_POST['category']))
		{
            $post = $this->download_category_model->get_category_by_id($id);
            $output['EDIT'] = array(
                "status" => "edit",
                "category" => $post->category,
                "jenis" => $post->jenis,
                "category_id" => $id
            ); 
			$this->admin->view('admin/kategori_form', $output);
		}
		else
		{
		    $uid = $this->session->userdata('id');
			$data['category']		= $this->input->post('category');
			$data['jenis']		= $this->input->post('jenis');
			$data['post_author']	= $uid;

			$this->download_category_model->update_category($data,$id);

			$this->session->set_userdata('message','Data telah tersimpan.');
			$this->session->set_userdata('message_type','success');

			$this->index();
		}
	}

	function delete()
	{
		$id = $this->input->post('category_id');
        $data=$this->download_category_model->delete_category($id);        
		echo json_encode($data);
	}

	
}