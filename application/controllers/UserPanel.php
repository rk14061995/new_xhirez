<?php
class UserPanel extends CI_Controller{
function __construct(){
	parent::__construct();

}

	public function login(){
		// print_r($this->session->userdata('login'));
		$this->load->view('userPanel/pages/userLogin');
		// $this->load->view('admin/Pages/index');
		// $this->load->view('Layout/footer');
	}
	public function register(){
		// print_r($this->session->userdata('login'));
		$this->load->view('userPanel/pages/userRegister');
		// $this->load->view('admin/Pages/index');
		// $this->load->view('Layout/footer');
	}

	public function dashboard(){
 		// print_r($this->session->userdata('login'));
 		$this->load->view('userPanel/layout/header');
 		$this->load->view('userPanel/pages/dashboard');
 		$this->load->view('userPanel/layout/footer');
 		// $this->load->view('admin/Pages/index');
 		// $this->load->view('Layout/footer');
 	}


}