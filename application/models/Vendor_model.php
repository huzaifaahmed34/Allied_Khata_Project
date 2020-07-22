<?php
class Vendor_model extends CI_Model{




function show_vendor()
 {
    
 $comp_id=$_SESSION['company_id'];
$query=$this->db->query("select * from accounts where type='Vendor' and is_deleted=0 and company_id='$comp_id'");
  return $query->result();
 }


function edit_vendor()
 {
    $id=$this->input->post('id');
 $this->db->where('id',$id);
$query=$this->db->get('accounts');
  return $query->result();
 }

 function update_vendor()
 {
    $id=$this->input->post('id');

 $date=date('Y-m-d');

$data1=array(
        
        'fullname'=>$this->input->post('fullname'),
'phone'=>$this->input->post('phone'),
    'city'=>$this->input->post('city'),

    'address'=>$this->input->post('address'),
     'uid'=>$this->input->post('uid'),
    'email'=>$this->input->post('email'),
  
    'website'=>$this->input->post('website'),
    
        'updated_on'=>$date,
);
$this->db->where('id',$id);
$this->db->update('accounts',$data1);


 }


public function save_vendor()
{
	$date=date('Y-m-d');
   
    $data=array(
    'type'=>$this->input->post('type'),
    'fullname'=>$this->input->post('fullname'),
'phone'=>$this->input->post('phone'),
    'city'=>$this->input->post('city'),
 'company_id'=>$_SESSION['company_id'],
    'address'=>$this->input->post('address'),
     'uid'=>$this->input->post('uid'),
    'email'=>$this->input->post('email'),
  
    'website'=>$this->input->post('website'),
    
     'balance'=>0,
    
    'created_on'=>$date,
     'is_deleted'=> 0   
    );
     $this->db->insert('accounts',$data);


}



function delete_vendor()
 {
    $date=date('Y-m-d');
    $id=$this->input->post('id');
    $data=array(
        'deleted_on'=>$date,
        'is_deleted'=>1);
$this->db->where('id',$id);
$this->db->update('accounts',$data);


 }




    }