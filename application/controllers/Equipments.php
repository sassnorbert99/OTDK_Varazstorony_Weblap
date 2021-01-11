<?php
	class Equipments extends CI_Controller{
		public function view($page = 'home'){
			if(!file_exists(APPPATH.'views/equipments/'.$page.'.php')){
				show_404();
			}
		
			if (!$this->session->userdata('logged_in')) {
				# code...
				redirect('users/login');
			}
			$data['title'] = ucfirst($page);


			$this->load->view('templates/header');
			$this->load->view('equipments/'.$page, $data);
			$this->load->view('templates/footer');
		}
	}