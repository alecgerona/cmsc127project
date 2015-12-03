<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login_model extends CI_Model{
	function __construct(){
		parent::__construct();
	}
	
	public function validate(){
		// grab user input
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		
		
		$this -> db -> select('name');
	    $this -> db -> from('posuser');
	    $this -> db -> where('username', $username);
	    $this -> db -> where('password', $password);

	 
	    $query = $this -> db -> get();
	 
	    if($query -> num_rows() == 1)
	    {

	    $this->session->set_userdata('username', $query);
	      return $query->result();
	    }

	    else
	    {

		    $this -> db -> select('name');
		    $this -> db -> from('admin');
		    $this -> db -> where('username', $username);
		    $this -> db -> where('password', $password);
		    $query = $this->db->get();

		    if ($query-> num_rows() == 1){
		    	$this->session->set_userdata('username', $query->row()->name);
		    	return $query->result();
		    }
		    return false;
	    }
		
	}

	public function popadminaccount(){

		$query = $this->db->select('*')->from('admin')->get();
   		return $query->result_array(); 	
	}

	public function popuseraccount(){

		$query = $this->db->select('*')->from('posuser')->get();
   		return $query->result_array(); 	
	}
}
?>