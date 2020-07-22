<?php
class Customer_model extends CI_Model{


public function save_accounts()
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


		public function save_accounts_manager()
{

    
	$array=$this->input->post('itemList');

    
     $count=0;
    
	foreach ($array as $arr) {
		
	
	$date=date('Y-m-d');
    if($count<1){
    $data=array(
    'type'=>$arr[1],
    'fullname'=>$arr[2],
'phone'=>$arr[3],
    'city'=>$arr[4],

    'address'=>$arr[5],
     'uid'=>$arr[6],
    'email'=>$arr[7],
  'company_id'=>$_SESSION['company_id'],
    'website'=>$arr[8],
    
     'balance'=>0,
    
    'created_on'=>$date,
     'is_deleted'=> 0   
    );
     $qr2=$this->db->insert('accounts',$data);
  }

    
  
    
$this->db->select_max('id');
     $last_row= $this->db->get('accounts')->result();
 foreach ($last_row as $r) {
    $v=$r->id; # code...
}     

    $data=array(
  'account_id'=>$v,
    'designation'=>$arr[9],
    'firstname'=>$arr[10],
   
    'lastname'=>$arr[11],

    'email'=>$arr[4],
     'phone'=>$arr[5],
  
    'created_on'=>$date,
     'is_deleted'=> 0    
    );
    
     $this->db->insert('company_staff',$data);
  
$count++;   }
	}

   function add_manager_edit(){
$date=date('Y-m-d');
    $data=array(
  'account_id'=>$this->input->post('hidman'),
    'designation'=>$this->input->post('designation'),
    'firstname'=>$this->input->post('firstname'),
   
    'lastname'=>$this->input->post('lastname'),

    'email'=>$this->input->post('email1'),
     'phone'=>$this->input->post('phone1'),
  
    'created_on'=>$date,
     'is_deleted'=> 0    
    );
    $this->db->insert('company_staff',$data);
  }


function show_managers()
 {
    $id=$this->input->post('id');

$query=$this->db->query("select * from designation  ,company_staff  where designation.id=company_staff.designation and company_staff.account_id='$id' and company_staff.is_deleted=0");
  return $query->result();
 }

function show_accounts()
 {
    
 $comp_id=$_SESSION['company_id'];
$query=$this->db->query("select * from accounts where is_deleted=0 and company_id='$comp_id'");
  return $query->result();
 }



function edit_managers()
 {
    $id=$this->input->post('id');
 $this->db->where('id',$id);
$query=$this->db->get('company_staff');
  return $query->result();
 }
function edit_accounts()
 {
    $id=$this->input->post('id');
 $this->db->where('id',$id);
$query=$this->db->get('accounts');
  return $query->result();
 }

function delete_managers()
 {
    $date=date('Y-m-d');
    $id=$this->input->post('id');
    $data=array(
        'deleted_on'=>$date,
        'is_deleted'=>1);
$this->db->where('id',$id);
$this->db->update('company_staff',$data);


 }


 function delete_accounts()
 {
    $date=date('Y-m-d');
    $id=$this->input->post('id');
   $this->db->query("UPDATE company_staff as cs, accounts as a SET  a.is_deleted=1, cs.is_deleted=1 WHERE cs.account_id=a.id and cs.account_id='$id'");

 }
  public function showdesignation(){
      $comp_id=$_SESSION['company_id'];

      $this->db->where('is_deleted',0);
      $this->db->where('company_id', $comp_id);
        $qry=$this->db->get('designation');
        return $qry->result();
    }


function delete_accounts1()
 {
    $date=date('Y-m-d');
    $id=$this->input->post('id');
    $data=array(
        'deleted_on'=>$date,
        'is_deleted'=>1);
$this->db->where('id',$id);
$this->db->update('accounts',$data);


 }


 function update_accounts()
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


function update_managers()
 {
    $id=$this->input->post('id2');

 $date=date('Y-m-d');

$data1=array(
        
      'designation'=>$this->input->post('designation'),
    'firstname'=>$this->input->post('firstname'),
   
    'lastname'=>$this->input->post('lastname'),

    'email'=>$this->input->post('email1'),
     'phone'=>$this->input->post('phone1'),
  
    'created_on'=>$date,
     
        'updated_on'=>$date,
);
$this->db->where('id',$id);
$this->db->update('company_staff',$data1);


 }

}

?>