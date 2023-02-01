<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Tugas_pokok_ppid extends CI_Controller {

	function __construct()
	{
		parent::__construct();
        $this->load->library('Admin');
		$this->load->model('master_model');
		$this->load->model('user_model');
		$this->load->model('post_model');
        
        if($this->session->userdata('status')!='login'){
			redirect(base_url("admin/login"));
		}
	}

	function index()
	{
        $post = $this->post_model->get_tugas_pokok_ppid();
        $output['POST'] = $post['result'];
		$output['PAGE_TITLE'] = 'TUGAS POKOK DAN FUNGSI PPID';
		$this->admin->view('admin/tugas_pokok_ppid', $output);
    }

    function json()
	{
		$article = $this->post_model->get_articel();
		$tmp = array();
		$tmp['total'] = $article['num_rows'];
		$tmp['rows'] = $article['result'];
		
		echo json_encode($tmp);
	}
    
    function add()
	{
        if (!isset($_POST['post_title']))
		{
            $output['EDIT'] = array(
                "status" => "add",
                "post_title" => "",
                "post_name" => "",
                "post_content" => "",
                "post_date" => "",
                "post_image" => "",
                "post_tag" => "",
                "post_type" => "",
            );            
		    $this->admin->view('admin/tugas_pokok_ppid_form', $output);
		}else
		{
            
			$upload_path = 'uploads/images/';
			if(substr(sprintf('%o', fileperms($upload_path)), -4) != '0777'){
				chmod($upload_path, 0777);
			}

			if( isset($_FILES['post_image']['tmp_name']) AND is_uploaded_file($_FILES['post_image']['tmp_name']) ){
				$filename				= $this->security->sanitize_filename(strtolower($_FILES['post_image']['name']));
				$filename				= 'article_'.date('ymd_his_').rand(1111,9999).'_'.$filename;
				$data['post_image']		= $filename;
				$destination			= $upload_path . $filename;
				move_uploaded_file($_FILES['post_image']['tmp_name'], $destination);
			}

			$uid = $this->session->userdata('id');

			$data['post_id']		= '';
			$data['post_title']		= $this->input->post('post_title');
			$data['post_content']	= $this->input->post('post_content');
			$data['post_date']		= $this->input->post('post_date');
			$data['post_name']		= $this->input->post('post_name');
			$data['post_status']	= '';
			$data['post_type']		= 'article';
			$data['post_tag']		= $this->input->post('post_tag');
			$data['post_type']		= $this->input->post('post_type');
			$data['post_author']	= $uid;
			$this->post_model->insert_post($data);

			$this->session->set_userdata('message','Data telah tersimpan.');
			$this->session->set_userdata('message_type','success');
            
			$this->index();
		}
        
    }

    function edit(){
        $id = $this->uri->segment(4);
        if (!isset($_POST['post_title']))
		{
            $post = $this->post_model->get_post_by_id($id);
            $output['EDIT'] = array(
                "status" => "edit",
                "post_id" => $id,
                "post_title" => $post->post_title,
                "post_name" => $post->post_name,
                "post_content" => $post->post_content,
                "post_date" => $post->post_date,
                "post_image" => $post->post_image,
                "post_tag" => $post->post_tag,
                "post_type" => $post->post_type,
            );            
		    $this->admin->view('admin/tugas_pokok_ppid_form', $output);
			
		}
		else
		{
			$upload_path = 'uploads/images/';
			if(substr(sprintf('%o', fileperms($upload_path)), -4) != '0777'){
				chmod($upload_path, 0777);
			}

			if( $remove_file = $this->input->post('remove_image') ){
				$data['post_image']	= '';
				if( file_exists($upload_path . $remove_file) ){
					@unlink($upload_path . $remove_file);
				}
			}

			if( isset($_FILES['post_image']['tmp_name']) AND is_uploaded_file($_FILES['post_image']['tmp_name']) ){
				$filename				= $this->security->sanitize_filename(strtolower($_FILES['post_image']['name']));
				$filename				= 'article_'.date('ymd_his_').rand(1111,9999).'_'.$filename;
				$data['post_image']		= $filename;
				$destination			= $upload_path . $filename;
				move_uploaded_file($_FILES['post_image']['tmp_name'], $destination);
			}

			$uid = $this->session->userdata('id');

			$data['post_title']		= $this->input->post('post_title');
			$data['post_content']	= $this->input->post('post_content');
			$data['post_date']		= $this->input->post('post_date');
			$data['post_name']		= $this->input->post('post_name');
			$data['post_status']	= '';
			$data['post_type']		= 'tugas pokok ppid';
			$data['post_tag']		= $this->input->post('post_tag');
			$data['post_type']		= $this->input->post('post_type');
			$data['post_author']	= $uid;

			$this->post_model->update_post($data,$id);


			$this->index();
		}
    }

    function delete()
	{
        $id = $this->input->post('post_id');
        $data=$this->post_model->delete_post($id);        
		echo json_encode($data);
	}


	
}