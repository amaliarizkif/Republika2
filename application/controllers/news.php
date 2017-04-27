<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class News extends CI_Controller {

	// public function index()
	// {
	// 	$data['news'] = $this->model_news->get_news()->result();
	// 	$this->load->view('news', $data);
	// }

	public function add_news()
	{
		$data['category'] = $this->model_news->get_category()->result();
		$this->load->view('header');
		$this->load->view('add_news', $data);
		$this->load->view('footer');
	}

	public function insert_news(){
		$config = array(
			'upload_path' => './uploads/',
			'allowed_types' => "gif|jpg|png|jpeg",
			'overwrite' => TRUE,
			'max_size' => "2048000",
			);
			$this->load->library('upload', $config);
			if($this->upload->do_upload())
			{
			$data = array('upload_data' => $this->upload->data());
			}
			else
			{
			$error = array('error' => $this->upload->display_errors());
			$this->load->view('file_view', $error);
			}
		$upload_data = $this->upload->data();
		date_default_timezone_set('Asia/Jakarta');
		$date = date('Y-m-d H:i:s');
		$data = array(
			'title' => $this->input->post('title'),
			'content' => $this->input->post('content'),
			'category' => $this->input->post('category'),
			'images' => $upload_data['file_name'],
			'date' => $date,
			'id_user' => $this->session->userdata('id_user')
		);

		$this->model_news->add_news($data);
		$msg['message'] = 'Data Inserted Successfully';
		$this->load->view('add_news', $msg);
		redirect('home');
	}

	public function delete($id_news)
	{
		$where = array('id_news' => $id_news );
		$this->model_news->delete($where,'news');
		redirect('home');
	}

	public function edit($id_news){
		$where = array('id_news' => $id_news );
		$data['news'] = $this->model_news->edit($where,'news')->result();
		$this->load->view('header');
		$this->load->view('edit',$data);
		$this->load->view('footer');
	}

	public function update($id_news){
		$id_news = $this->input->post('id_news');

		$config = array(
			'upload_path' => './uploads/',
			'allowed_types' => "gif|jpg|png|jpeg",
			'overwrite' => TRUE,
			'max_size' => "2048000",
			);
			$this->load->library('upload', $config);
			if($this->upload->do_upload())
			{
			$data = array('upload_data' => $this->upload->data());
			}
			else
			{
			$error = array('error' => $this->upload->display_errors());
			$this->load->view('file_view', $error);
			}
		$upload_data = $this->upload->data();
		date_default_timezone_set('Asia/Jakarta');
		$date = date('Y-m-d H:i:s');

		$data = array(
			'title' => $this->input->post('title'),
			'content' => $this->input->post('content'),
			'category' => $this->input->post('category'),
			'images' => $upload_data['file_name'],
			'date' => $date
		);

		$where = array(
				'id_news' => $this->input->post('id_news')
			);
		$this->model_news->update($where,$data,'news');
		redirect('home');
	}
}
