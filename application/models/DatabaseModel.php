<?php
	class DatabaseModel extends CI_Model{

		public function getData($table_name='', $condition='',$extra=''){
			return $this->db->where($condition)->get($table_name)->result();
		}
	}



?>