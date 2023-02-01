<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class banner extends CI_Controller {

	function __construct()
	{
		parent::__construct();
        $this->load->library('Admin');
		$this->load->model('master_model');
		$this->load->model('user_model');
		$this->load->model('banner_model');

        if($this->session->userdata('status')!='login'){
			redirect(base_url("admin/login"));
		}
	}

	function index()
    {   $post = $this->banner_model->get_banner();
        $output['POST']= $post['result'];
		$output['PAGE_TITLE'] = 'BANNER';
		$this->admin->view('admin/banner', $output);
	}


	function add()
	{
		if (!isset($_POST['title']))
		{
            $output['EDIT'] = array(
                "status" => "add",
                "banner_id" => "",
                "title" => "",
                "content" => "",
                "image" => "",
            ); 
			$this->admin->view('admin/banner_form', $output);
		}
		else
		{
			if(isset($_POST["image"])){
				$img = $_POST['image'];
     
				list($type, $img) = explode(';', $img);
				list(, $img)      = explode(',', $img);
			
				$img = base64_decode($img);
				$imageName = 'banner_'.date('ymd_his_').rand(1111,9999).'.png';
				file_put_contents('uploads/banner/'.$imageName, $img);
				
			}
         

			$data['image']			= $imageName;
			$data['banner_id']		= '';
			$data['title']			= $this->input->post('title');
			$data['content']		= $this->input->post('content');
			$this->banner_model->insert_banner($data);

			$this->session->set_userdata('message','Data telah tersimpan.');
			$this->session->set_userdata('message_type','success');

			$this->index();
		}
	}

	function edit()
	{
		$id = $this->uri->segment(4);
		if (!isset($_POST['title']))
		{
            $post = $this->banner_model->get_banner_by_id($id);
            $output['EDIT'] = array(
                "status" => "edit",
                "banner_id" => $id,
                "title" => $post->title,
                "content" => $post->content,
                "image" => $post->image,
            ); 
			$this->admin->view('admin/banner_form', $output);
		}
		else
		{
			if(isset($_POST["image"])){
				$img = $_POST['image'];
     
				list($type, $img) = explode(';', $img);
				list(, $img)      = explode(',', $img);
			
				$img = base64_decode($img);
				$imageName = 'banner_'.date('ymd_his_').rand(1111,9999).'.png';
				file_put_contents('uploads/banner/'.$imageName, $img);
				
			}
         

			$data['image']			= $imageName;
			$data['title']			= $this->input->post('title');
			$data['content']		= $this->input->post('content');

			$this->banner_model->update_banner($data,$id);

			$this->session->set_userdata('message','Data telah tersimpan.');
			$this->session->set_userdata('message_type','success');

			$this->index();
		}
	}

	
	function delete()
	{
		$id = $this->input->post('banner_id');
        $data=$this->banner_model->delete_banner($id);        
		echo json_encode($data);
	}


}