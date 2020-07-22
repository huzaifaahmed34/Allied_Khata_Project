<?php
class Bank_model extends CI_Model{




function show_bank()
 {
    
 $comp_id=$_SESSION['company_id'];
$query=$this->db->query("select * from accounts where type='bank' and is_deleted=0 and company_id='$comp_id'");
  return $query->result();
 }


function edit_bank()
 {
    $id=$this->input->post('id');
 $this->db->where('id',$id);
$query=$this->db->get('accounts');
  return $query->result();
 }

 function update_bank()
 {
    $id=$this->input->post('id');

 $date=date('Y-m-d');

$data1=array(
        
    'fullname'=>$this->input->post('bank_name'),
'address'=>$this->input->post('branch'),
    'city'=>$this->input->post('city'),
'updated_on'=>$date,
  
);
$this->db->where('id',$id);
$this->db->update('accounts',$data1);


 }

public function save_bank()
{
	$date=date('Y-m-d');
 
    $data=array(
    
          'company_id'=> $_SESSION['company_id'],
    'fullname'=>$this->input->post('bank_name'),
'address'=>$this->input->post('branch'),
    'city'=>$this->input->post('city'),
'type'=>'bank',
    'created_on'=>$date,
     'is_deleted'=> 0   
    );
     $this->db->insert('accounts',$data);


}



function delete_bank()
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