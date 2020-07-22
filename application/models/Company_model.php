<?php
class Company_model extends CI_Model{




function show_company()
 {
     
if($_SESSION['user_type']=='admin'){
    $comp=$_SESSION['company_id'];
    $query=$this->db->query("select * from company_details where is_deleted=0 and id='$comp'  ");
} 
 else{
$query=$this->db->query("select * from company_details where is_deleted=0 ");
 
 } return $query->result();
}

function edit_company()
 {
    $id=$this->input->post('id');
 $this->db->where('id',$id);
$query=$this->db->get('company_details');
  return $query->result();
 }

 function update_company($image)
 {
    $id=$this->input->post('id');

 $date=date('Y-m-d');

$data1=array(
        
      
    'company_name'=>$this->input->post('company_name'),
'phone'=>$this->input->post('phone'),
    'city'=>$this->input->post('city'),

    'address'=>$this->input->post('address'),
     'fax'=>$this->input->post('fax'),
    'email'=>$this->input->post('email'),
  
    'logo'=>$image,
    
        'updated_on'=>$date,
);
$this->db->where('id',$id);
$this->db->update('company_details',$data1);


 }


 public function company_status(){
$id=$this->input->post('id');
$value=$this->input->post('value');
if($value==0){
 $data=array(
             'status'=> 0,
             );
}
if($value==1){
    $data=array(
             'status'=> 1,
             );
}
 $this->db->where('id',$id);
 $this->db->update('company_details',$data);

 }

public function save_company($image)
{
	$date=date('Y-m-d');
   
    $data=array(
    
    'company_name'=>$this->input->post('company_name'),
'phone'=>$this->input->post('phone'),
    'city'=>$this->input->post('city'),

    'address'=>$this->input->post('address'),
     'fax'=>$this->input->post('fax'),
    'email'=>$this->input->post('email'),
  
    'logo'=>$image,
    
  
    
    'created_on'=>$date,
     'is_deleted'=> 0   
    );
     $this->db->insert('company_details',$data);


}



function delete_company()
 {
    $date=date('Y-m-d');
    $id=$this->input->post('id');
    $data=array(
        'deleted_on'=>$date,
        'is_deleted'=>1);
$this->db->where('id',$id);
$this->db->update('company_details',$data);


 }




    }