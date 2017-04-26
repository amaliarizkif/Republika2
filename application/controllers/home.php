<?php
	class Home extends CI_Controller {

		public function index(){
			$data['news'] = $this->model_news->get_news()->result();
			$this->load->view('header');
			$this->load->view('main', $data);
			$this->load->view('footer');
		}

	}
?>