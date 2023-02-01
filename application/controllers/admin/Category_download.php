<?php

class Category_download extends CI_Controller {

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
        $post = $this->download_category_model->get_download_category();
        $output['POST'] = $post['result'];
		$output['PAGE_TITLE'] = 'APBD CATEGORY';
		$this->admin->view('admin/download_category', $output);
	}

	function json()
	{
		$download_category = $this->download_category_model->get_download_category();
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
            ); 
			
			$this->admin->view('admin/download_category_form', $output);
		}
		else
		{
			$data['category_id']	= '';
			$data['category']		= $this->input->post('category');
			$this->download_category_model->insert_download_category($data);

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
            $post = $this->download_category_model->get_download_category_by_id($id);
            $output['EDIT'] = array(
                "status" => "edit",
                "category" => $post->category,
                "category_id" => $id
            ); 
			$this->admin->view('admin/download_category_form', $output);
		}
		else
		{
			$data['category']		= $this->input->post('category');

			$this->download_category_model->update_download_category($data,$id);

			$this->session->set_userdata('message','Data telah tersimpan.');
			$this->session->set_userdata('message_type','success');

			$this->index();
		}
	}

	function delete()
	{
		$id = $this->input->post('category_id');
        $data=$this->download_category_model->delete_download_category($id);        
		echo json_encode($data);
	}

	
}