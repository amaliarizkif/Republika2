<?php
	class Home extends CI_Controller {

		public function index(){
			$data['news'] = $this->model_news->get_news()->result();
			$this->load->view('header');
			$this->load->view('main', $data);
			$this->load->view('footer');
		}

		public function news_select($id_news){

			$data['select'] = $this->model_news->get_selectednews($id_news);
			$this->load->view('header');
			$this->load->view('detail_news', $data);
			$this->load->view('footer');

		}

		public function login(){
			$this->load->view('header');
			$this->load->view('login');
			$this->load->view('footer');
		}

		public function register(){
			$this->load->view('header');
			$this->load->view('register');
			$this->load->view('footer');
		}

		public function add_news(){
			$this->load->view('header');
			$this->load->view('add_news');
			$this->load->view('footer');
		}
	}
?>