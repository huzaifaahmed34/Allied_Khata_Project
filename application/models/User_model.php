<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model{

    
	public function insert()

	{
		$date=date('Y-m-d');
$data=array(
'first_name'=>$this->input->post('first_name'),
'last_name'=>$this->input->post('last_name'),
'company_id'=>$this->input->post('company'),
'username'=>$this->input->post('username'),
'email'=>$this->input->post('email'),
'password'=>$this->input->post('password'),
'contact'=>$this->input->post('contact'),

'user_type'=>$this->input->post('type'),
'status'=>'Active',


'dob'=>$this->input->post('dob'),
'address'=>$this->input->post('address'),
'created_on'=>$date,

);

$this->db->insert('user',$data);

	}
public function showdata(){

$c=$_SESSION['company_id'];
		$qry=$this->db->query("select  * from user where is_deleted=0 and company_id='$c'");
		return $qry->result();

}
public function user_edit(){
		$id=$this->input->post('id');
		$qry=$this->db->query("select  * from user where is_deleted=0 and id='$id'");
		return $qry->result();

}

public function user_update(){
		$id=$this->input->post('id');
		$date=date('Y-m-d');
$data=array(
'first_name'=>$this->input->post('first_name1'),
'last_name'=>$this->input->post('last_name1'),
'username'=>$this->input->post('username1'),
'email'=>$this->input->post('email1'),
'company_id'=>$this->input->post('company'),
'contact'=>$this->input->post('contact1'),

'dob'=>$this->input->post('dob1'),
'address'=>$this->input->post('address1'),
'updated_on'=>$data,

);
$this->db->where('id',$id);

$this->db->update('user',$data);

}

public function user_delete(){
		$id=$this->input->post('id');
			$date=date('Y-m-d');
$data=array(
'is_deleted'=>1,
'deleted_on'=>$date,
);
$this->db->where('id',$id);

$this->db->update('user',$data);

		

}


function show_company()
 {
  $id=$_SESSION['company_id'];

 if($_SESSION['user_type']=='super_admin'){
$query=$this->db->query("select * from company_details where is_deleted=0 and status=0");
 return $query->result();
}
if($_SESSION['user_type']=='admin' || $_SESSION['user_type']=='admin'){
	$query=$this->db->query("select * from company_details where is_deleted=0 and status=0 and id=$id");
	 return $query->result();
}
 
 }


}