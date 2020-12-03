<?php
class CompanyAdmin extends CI_Controller{
function __construct(){
	parent::__construct();

}

	public function login(){
		// print_r($this->session->userdata('login'));
		$this->load->view('companyPanel/pages/companyLogin');
		// $this->load->view('admin/Pages/index');
		// $this->load->view('Layout/footer');
	}
	public function register(){
		// print_r($this->session->userdata('login'));
		$this->load->view('companyPanel/pages/companyRegister');
		// $this->load->view('admin/Pages/index');
		// $this->load->view('Layout/footer');
	}

	public function dashboard(){
 		// print_r($this->session->userdata('login'));
 		$this->load->view('companyPanel/layout/header');
 		$this->load->view('companyPanel/pages/dashboard');
 		$this->load->view('companyPanel/layout/footer');
 		// $this->load->view('admin/Pages/index');
 		// $this->load->view('Layout/footer');
 	}
 // public function features(){
 // 		$this->load->view('companyPanel/layout/header');
 // 		$this->load->view('companyPanel/pages/home');
 // 		$this->load->view('companyPanel/layout/footer');
 // 	}
}