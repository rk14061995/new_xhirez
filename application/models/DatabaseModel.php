<?php
	class DatabaseModel extends CI_Model{

		public function getData($table_name='', $condition='',$extra=''){
			return $this->db->where($condition)->get($table_name)->result();
		}
		public function insertData($table_name, $data){
			$response=$this->db->where($data)->get($table_name)->result();
			// print_r($data);
			if(count($response)==0){
				if($this->db->insert($table_name,$data)){
					// echo ' One ';
					return 1;
				}else{
					// echo ' Zero ';
					return 0;
				}
			}else{
				// echo ' Two ';
				return 2;
			}
		}
	}



?>