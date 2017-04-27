<?php
	class Login extends CI_Controller {

		public function check_login(){
			$email = $this->input->post('email');
			$password = $this->input->post('password');

			$where = array(
			'email' => $email,
			'password' => $password
			);

			$num =  $this->model_login->get_user('user', $where)->num_rows();
			$user =  $this->model_login->get_user('user', $where)->result();

			if ($num > 0) {
				$sess = array(
					'name' => $user[0]->name,
					'login' => TRUE,
					'id_user'=> $user[0]->id_user,
					);
				$this->session->set_userdata($sess);
				redirect('home');
			}
			else{
				redirect('home/login');
			}
		}

		public function logout(){
			$this->session->unset_userdata('name');
			$this->session->unset_userdata('login');
			$this->session->unset_userdata('id_user');
			redirect(base_url());
		}
		public function register(){
			$data_user = array(
				'email' => $this->input->post('email'),
				'password' => $this->input->post('password'),
				'name' => $this->input->post('name')
				);
			$this->model_login->add_user($data_user);
			redirect('home/login');
		}

		
	}
?>