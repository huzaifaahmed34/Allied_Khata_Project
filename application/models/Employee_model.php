<?php
class Employee_model extends CI_Model{




public function save_employee()
{
	$date=date('Y-m-d');
   $fname=$this->input->post('firstname');
   $lname=$this->input->post('lastname');
   $full=$fname.' '.$lname;

    $data=array(
    'type'=>$this->input->post('type'),
    'fullname'=>$full,
    'company_id'=>$_SESSION['company_id'],
'phone'=>$this->input->post('phone'),
    'city'=>$this->input->post('city'),

    'address'=>$this->input->post('address'),
     
    'email'=>$this->input->post('email'),
  
   
    
     'balance'=>0,
    
    'created_on'=>$date,
     'is_deleted'=> 0   
    );
     $this->db->insert('accounts',$data);

    
$this->db->select_max('id');
     $last_row= $this->db->get('accounts')->result();
 foreach ($last_row as $r) {
    $v=$r->id; # code...
}   
      $data1=array(
    'account_id'=>$v,

    'firstname'=>$fname,
    'lastname'=>$lname,
'phone_1'=>$this->input->post('phone'),
'phone_2'=>$this->input->post('phone1'),
'gender'=>$this->input->post('gender'),
    'city'=>$this->input->post('city'),
'cnic'=>$this->input->post('cnic'),
    'address'=>$this->input->post('address'),
     
    'email'=>$this->input->post('email'),
     'designation'=>$this->input->post('designation'),
      'dob'=>$this->input->post('dob'),
       'doj'=>$this->input->post('doj'),
          'job_type'=>$this->input->post('job'),
             'basic_pay'=>$this->input->post('basicpay'),
  
  
    
    'created_on'=>$date,
     'is_deleted'=> 0   
    );

 $this->db->insert('staff_detail',$data1);
}
 



function show_employee()
 {
     $comp_id=$_SESSION['company_id'];

 
$query=$this->db->query("select * from staff_detail where is_deleted=0 and company_id='$comp_id'");
  return $query->result();
 }


function edit_employee()
 {
    $id=$this->input->post('id');
 $this->db->where('id',$id);
$query=$this->db->get('staff_detail');
  return $query->result();
 }

 function update_employee()
 {
    $id=$this->input->post('id');
    $account_id=$this->input->post('account_id');

 $date=date('Y-m-d');
  $fname=$this->input->post('firstname');
   $lname=$this->input->post('lastname');
   $full=$fname.' '.$lname;

    $data=array(
    
    'fullname'=>$full,
'phone'=>$this->input->post('phone'),
    'city'=>$this->input->post('city'),

    'address'=>$this->input->post('address'),
     
    'email'=>$this->input->post('email'),
  
   
    
  
    
    'updated_on'=>$date,
     'is_deleted'=> 0   
    );
$this->db->where('id',$account_id);
$this->db->update('accounts',$data);


      $data1=array(

    'firstname'=>$fname,
    'lastname'=>$lname,
'phone_1'=>$this->input->post('phone'),
'phone_2'=>$this->input->post('phone1'),
'gender'=>$this->input->post('gender'),
    'city'=>$this->input->post('city'),
'cnic'=>$this->input->post('cnic'),
    'address'=>$this->input->post('address'),
     
    'email'=>$this->input->post('email'),
     'designation'=>$this->input->post('designation'),
      'dob'=>$this->input->post('dob'),
       'doj'=>$this->input->post('doj'),
          'job_type'=>$this->input->post('job'),
             'basic_pay'=>$this->input->post('basicpay'),
  
  
    
    'updated_on'=>$date,
     'is_deleted'=> 0   
    );
$this->db->where('id',$id);
 $this->db->update('staff_detail',$data1);
 }

function delete_employee()
 {
    $date=date('Y-m-d');
    $id=$this->input->post('id');
    $this->db->query("UPDATE staff_detail as cs, accounts as a SET  a.is_deleted=1, cs.is_deleted=1 WHERE cs.account_id=a.id and cs.account_id='$id'");

 }

}



