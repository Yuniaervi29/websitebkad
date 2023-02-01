<?php 

class Links extends CI_Controller {

	function __construct()
	{
		parent::__construct();

        $this->load->library('Admin');
		$this->load->model('master_model');
		$this->load->model('user_model');
		$this->load->model('links_model');

        if($this->session->userdata('status')!='login'){
			redirect(base_url("admin/login"));
		}
	}

	function index()
	{
        $post = $this->links_model->get_links();
        $output['POST'] = $post['result'];
		$output['PAGE_TITLE'] = 'LINKS';
		$this->admin->view('admin/link', $output);
	}

	function add()
	{
		if (!isset($_POST['link_title']))
		{
			$output['EDIT'] = array(
                "status" => "add",
				"link_id" => "",
                "link_title" => "",
                "link_url" => "",
                "link_target" => "",
                "link_status" => ""
            );            
			$this->admin->view('admin/link_form', $output);
		}
		else
		{
			$CU = $this->user_model->current_user();
			$uid = isset($CU->uid) ? $CU->uid : '';

			$data['link_id']		= '';
			$data['link_title']		= $this->input->post('link_title');
			$data['link_url']		= $this->input->post('link_url');
			$data['link_target']	= $this->input->post('link_target');
			$data['link_status']	= $this->input->post('link_status');
			$data['uid']			= $uid;
			$this->links_model->insert_link($data);

			$this->session->set_userdata('message','Data telah tersimpan.');
			$this->session->set_userdata('message_type','success');

			$this->index();
		}
	}

	function edit()
	{
		$id = $this->uri->segment(4);
		if (!isset($_POST['link_title']))
		{
            $post = $this->links_model->get_link_by_id($id);
            $output['EDIT'] = array(
                "status" => "edit",
				"link_id" => $id,
                "link_title" => $post->link_title,
                "link_url" => $post->link_url,
                "link_target" => $post->link_target,
                "link_status" => $post->link_status
            );            
		    $this->admin->view('admin/link_form', $output);
		}
		else
		{
			$data['link_title']		= $this->input->post('link_title');
			$data['link_url']		= $this->input->post('link_url');
			$data['link_target']	= $this->input->post('link_target');
			$data['link_status']	= $this->input->post('link_status');

			$this->links_model->update_link($data,$id);

			$this->session->set_userdata('message','Data telah tersimpan.');
			$this->session->set_userdata('message_type','success');

			$this->index();
		}
	}


	function valid_url()
	{
		if( ! $this->input->post('link_url')) return TRUE;

		if( ! valid_url($this->input->post('link_url')) )
		{
			$this->form_validation->set_message('valid_url', 'Penulisan URL salah, contoh: http://www.domain.com');
			return FALSE;
		}
		else
		{
			return TRUE;
		}
	}

	function delete()
	{
		$id = $this->input->post('link_id');
        $data=$this->links_model->delete_link($id);       
		echo json_encode($data);
	}

	
}