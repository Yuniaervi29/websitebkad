<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Video extends CI_Controller {

	function __construct()
	{
		parent::__construct();
        $this->load->library('Admin');
		$this->load->model('master_model');
		$this->load->model('user_model');
		$this->load->model('video_model');

        if($this->session->userdata('status')!='login'){
			redirect(base_url("admin/login"));
		}
	}

	function index()
	{   
        $post = $this->video_model->get_video();
        $output['POST']=$post['result'];;
		$output['PAGE_TITLE'] = 'VIDEO';
		$this->admin->view('admin/video', $output);
	}



	function add()
	{
		if (!isset($_POST['title']))
		{
			$output['EDIT'] = array(
                "status" => "add",
                "video_id" => "",
                "title" => "",
                "content" => "",
                "date_created" => "",
                "image" => "",
                "video" => "",
            ); 
			$this->admin->view('admin/video_form', $output);
		}
		else
		{
			$upload_path = 'uploads/video/';
			if(substr(sprintf('%o', fileperms($upload_path)), -4) != '0777'){
				chmod($upload_path, 0777);
			}
			
			if( isset($_FILES['image']['tmp_name']) AND is_uploaded_file($_FILES['image']['tmp_name']) ){
				$filename				= $this->security->sanitize_filename(strtolower($_FILES['image']['name']));
				$filename				= 'img_vid_'.date('ymd_his_').rand(1111,9999).'_'.$filename;
				$data['image']	= $filename;
				$destination			= 'uploads/video/img/' . $filename;
				move_uploaded_file($_FILES['image']['tmp_name'], $destination);
			}
			if( isset($_FILES['video']['tmp_name']) AND is_uploaded_file($_FILES['video']['tmp_name']) ){
				$filename				= $this->security->sanitize_filename(strtolower($_FILES['video']['name']));
				$filename				= 'video_'.date('ymd_his_').rand(1111,9999).'_'.$filename;
				$data['video']	= $filename;
				$destination			= $upload_path . $filename;
				move_uploaded_file($_FILES['video']['tmp_name'], $destination);
			}

			$data['video_id']		= '';
			$data['title']			= $this->input->post('title');
			$data['content']		= $this->input->post('content');
// 			$data['date']			= $this->input->post('post_date');
			$data['date_created']	= $this->input->post("date_created");
            
            $this->video_model->insert_video($data);

			$this->session->set_userdata('message','Data telah tersimpan.');
			$this->session->set_userdata('message_type','success');

			$this->index();
			
// 			$save = $this->video_model->insert_video($data);
// 			if($save){
// 				$json='success';
// 			}else{
// 				$json='failed';
// 			}
//         	echo json_encode($json);    

			// redirect(site_url('admin/album'));
		}
	}
	
	function edit()
	{
		$id = $this->uri->segment(4);
		if (!isset($_POST['title']))
		{
			$post = $this->video_model->get_video_by_id($id);
			$output['EDIT'] = array(
                "status" => "edit",
                "video_id" => $id,
                "title" => $post->title,
                "content" => $post->content,
                "image" => $post->image,
                "video" => $post->video,
                "date_created" => $post->date_created,
            );
			$this->admin->view('admin/video_form', $output);
		}
		else
		{
			$upload_path = 'uploads/video/';
			if(substr(sprintf('%o', fileperms($upload_path)), -4) != '0777'){
				chmod($upload_path, 0777);
			}
				if( $remove_file = $this->input->post('remove_image') ){
				$data['image'] = '';
				if( file_exists($upload_path . $remove_file) ){
					@unlink($upload_path . $remove_file);
				}
			}
			
			if( isset($_FILES['image']['tmp_name']) AND is_uploaded_file($_FILES['image']['tmp_name']) ){
				$filename				= $this->security->sanitize_filename(strtolower($_FILES['image']['name']));
				$filename				= 'img_vid_'.date('ymd_his_').rand(1111,9999).'_'.$filename;
				$data['image']	        = $filename;
				$destination			= $upload_path.'img/' . $filename;
				move_uploaded_file($_FILES['image']['tmp_name'], $destination);
			}
			if( isset($_FILES['video']['tmp_name']) AND is_uploaded_file($_FILES['video']['tmp_name']) ){
				$filename				= $this->security->sanitize_filename(strtolower($_FILES['video']['name']));
				$filename				= 'video_'.date('ymd_his_').rand(1111,9999).'_'.$filename;
				$data['video']	        = $filename;
				$destination			= $upload_path . $filename;
				move_uploaded_file($_FILES['video']['tmp_name'], $destination);
			}
            
            
            $data['video_id']		= $this->input->post('video_id');
			$data['title']			= $this->input->post('title');
			$data['content']		= $this->input->post('content');
            // $data['date_created']	= $this->input->post('date_created');

			$this->video_model->update_video($data,$id);

			$this->session->set_userdata('message','Data telah tersimpan.');
			$this->session->set_userdata('message_type','success');

			$this->index();
		}
	}

	function edit_nerf()
	{
		$id = $this->uri->segment(4);
		
			$upload_path = 'uploads/video/';
			if(substr(sprintf('%o', fileperms($upload_path)), -4) != '0777'){
				chmod($upload_path, 0777);
			}
				if( $remove_file = $this->input->post('remove_image') ){
				$data['image'] = '';
				if( file_exists($upload_path . $remove_file) ){
					@unlink($upload_path . $remove_file);
				}
			}
			
			if( isset($_FILES['image']['tmp_name']) AND is_uploaded_file($_FILES['image']['tmp_name']) ){
				$filename				= $this->security->sanitize_filename(strtolower($_FILES['image']['name']));
				$filename				= 'img_vid_'.date('ymd_his_').rand(1111,9999).'_'.$filename;
				$data['image']	        = $filename;
				$destination			= $upload_path . $filename;
				move_uploaded_file($_FILES['image']['tmp_name'], $destination);
			}
			if( isset($_FILES['video']['tmp_name']) AND is_uploaded_file($_FILES['video']['tmp_name']) ){
				$filename				= $this->security->sanitize_filename(strtolower($_FILES['video']['name']));
				$filename				= 'video_'.date('ymd_his_').rand(1111,9999).'_'.$filename;
				$data['video']	        = $filename;
				$destination			= $upload_path . $filename;
				move_uploaded_file($_FILES['video']['tmp_name'], $destination);
			}
            
            
            $data['video_id']		= $this->input->post('video_id');
			$data['title']			= $this->input->post('title');
			$data['content']		= $this->input->post('content');
            // $data['date_created']	= $this->input->post('date_created');

			$proses = $this->video_model->update_video($data,$id);
			if($proses){
			    echo json_encode('success');
			}else{
			    echo json_encode('gagal');
			}

		
	}


	public function delete()
	{
		$id = $this->input->post('video_id');
        $data=$this->video_model->delete_video($id);        
		echo json_encode($data);
	}

	
}