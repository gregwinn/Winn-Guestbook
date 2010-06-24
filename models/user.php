<?php
class User extends M {
	
	function getAllUsers(){
		$this->db->select('username')->from('wgb_users');
		//$this->db->from('wgb_users');
		return $this->db->getQuery();
	}
	
	function getUserByID($id){
		$this->db->select('username')->from('wgb_users')->where('id', $id);
		return $this->db->getQuery();
	}
	
}
?>