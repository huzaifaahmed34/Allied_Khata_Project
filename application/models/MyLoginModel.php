<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MyLoginModel extends CI_Model
{
	function __construct()
    {
        parent::__construct();
    }
	
	function get_user($user_name,$email)
	{
       
		$this->db->where('username', $user_name);
		$this->db->where('email',$email);
        $query = $this->db->get('user');
		return $query->result();
	}
	
	 function check_user()
	 {
	     $username=$this->input->post('username');
	     $email=$this->input->post('email');
	     
	     $qry=$this->db->query("select * from user where username='$username' and email='$email'")->result();
	    return $qry; 
	       
	        	
	     
	     
	     
	 }
	
		 function forget_pass($q)
	 {
	     $username=$this->input->post('username');
	     $email=$this->input->post('email');
	     $qry= $this->db->query("update user set password='$q' where username='$username' and email='$email'");
	        return $qry;	
	     
	     
	     
	 }
	
    function login($user_name,$pass)
	{
  
		$query=$this->db->query("select * from user as u where  u.username='$user_name' and  u.password='$pass' and status='Active'");
		return $query->result();
	}
	
	// get user
	function get_user_by_id($id)
	{
		$this->db->where('id', $id);
        $query = $this->db->get('user');
		return $query->result();
	}


}?>