<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin_model extends CI_Model{
	function __construct(){
		parent::__construct();
	}
	
	public function admininfo(){
		$name = $this->input->post('inputadminname');
		$username = $this->input->post('inputadminusername');
		$password = $this->input->post('inputadminpassword');
		$id = $this->input->post('inputadminadminid');

		$sql = "UPDATE admin SET name='$name', username='$username', password='$password' where adminid=$id";
		$query = $this->db->query($sql);
	}

	public function userinfo(){
		$name = $this->input->post('editusername');
		$username = $this->input->post('edituserusername');
		$password = $this->input->post('edituserpassword');
		$id = $this->input->post('edituseruserid');

		$sql = "UPDATE posuser SET name='$name', username='$username', password='$password' where userid=$id";
		$query = $this->db->query($sql);
	}

	public function deleteadmininfo(){
		$id = $this->input->post('deleteadminadminid');
		$sql = "DELETE FROM admin where adminid=$id";
		$query = $this->db->query($sql);
	}
}
?>