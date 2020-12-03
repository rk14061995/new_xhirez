<?php
class Website extends CI_Controller{
function __construct(){
	parent::__construct();

}

public function index(){
 		// print_r($this->session->userdata('login'));
 		$this->load->view('website/webpages/splash');
 		// $this->load->view('admin/Pages/index');
 		// $this->load->view('Layout/footer');
 	}

 public function home(){
 		// print_r($this->session->userdata('login'));
 		$this->load->view('website/layout/header');
 		$this->load->view('website/webpages/home');
 		$this->load->view('website/layout/footer');
 		// $this->load->view('admin/Pages/index');
 		// $this->load->view('Layout/footer');
 	}
 public function features(){
 		// print_r($this->session->userdata('login'));
 		$this->load->view('website/layout/header');
 		$this->load->view('website/webpages/features');
 		$this->load->view('website/layout/footer');
 		// $this->load->view('admin/Pages/index');
 		// $this->load->view('Layout/footer');
 	}
}