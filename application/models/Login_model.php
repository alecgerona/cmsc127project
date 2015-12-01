<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login_model extends CI_Model{
	function __construct(){
		parent::__construct();
	}
	
	public function validate(){
		// grab user input
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		
		
		$this -> db -> select('username, password');
	    $this -> db -> from('posuser');
	    $this -> db -> where('username', $username);
	    $this -> db -> where('password', $password);

	 
	    $query = $this -> db -> get();
	 
	    if($query -> num_rows() == 1)
	    {
	      return $query->result();
	    }
	    else
	    {
	      return false;
	    }
		
	}
}
?>