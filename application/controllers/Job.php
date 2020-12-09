<?php
class Job extends CI_Controller{
function __construct(){
	parent::__construct();
	// if(!$this->session->userdata('login_admin')){
	// 	redirect('Login-Page');
	// }
}

	public function index(){
 		// print_r($this->session->userdata('login'));
 		$this->load->view('admin/Layout/header');
 		$this->load->view('admin/Pages/index');
 		// $this->load->view('Layout/footer');
 	}
 	public function applyJob(){
 		$data=array(	
 						"job_post_id"=>$this->input->post('job_id'),
 						"applied_by"=>$this->input->post('employee_id')
 					);
 		if(count($this->db->where($data)->get('job_application')->result())==0){
 			if($this->db->insert('job_application',$data)){	
 				die(json_encode(array("code"=>1)));
 			}else{
 				die(json_encode(array("code"=>0)));	
 			}
 		}else{
 			die(json_encode(array("code"=>2)));
 		}
 	}
 	public function bookMarkJob(){
 		
 		$data=array(	
 						"job_post_id"=>$this->input->post('job_id'),
 						"applied_by"=>$this->input->post('employee_id')
 					);
 		if(count($this->db->where($data)->get('bookmarked_job')->result())==0){
 			if($this->db->insert('bookmarked_job',$data)){	
 				die(json_encode(array("code"=>1)));
 			}else{
 				die(json_encode(array("code"=>0)));	
 			}
 		}else{
 			die(json_encode(array("code"=>2)));
 		}
 	}



}