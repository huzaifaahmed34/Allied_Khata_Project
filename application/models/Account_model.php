<?php
class Account_model extends CI_Model{


public function save_accounts()
{
	$date=date('Y-m-d');
   
    $data=array(
        'company_id'=>$_SESSION['company_id'],
    'type'=>$this->input->post('type'),
    'fullname'=>$this->input->post('fullname'),
'phone'=>$this->input->post('phone'),
    'city'=>$this->input->post('city'),

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


public function save_vendor()
{
	$date=date('Y-m-d');
   
    $data=array(
        'company_id'=>$_SESSION['company_id'],
    'type'=>$this->input->post('type'),
    'fullname'=>$this->input->post('fullname'),
'phone'=>$this->input->post('phone'),
    'city'=>$this->input->post('city'),

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

public function save_employee()
{
	$date=date('Y-m-d');
   $fname=$this->input->post('firstname');
   $lname=$this->input->post('lastname');
   $full=$fname.' '.$lname;

    $data=array(
    'type'=>$this->input->post('type'),
    'fullname'=>$full,
'phone'=>$this->input->post('phone'),
    'city'=>$this->input->post('city'),

    'address'=>$this->input->post('address'),
     
    'email'=>$this->input->post('email'),
  
   'company_id'=>$_SESSION['company_id'],
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

public function designationadd(){
        $date=date("Y-m-d");
        $data=array(
            'name'=> $this->input->post('designation1'),
          
            'created_on'=>$date,
            'is_deleted'=>0,
        );
        $this->db->insert('designation',$data);
    }
    public function designationedit(){
        $id=$this->input->post('id');

        $this->db->where('id',$id);
        $qry=$this->db->get('designation');
        return $qry->result();
    }
        public function showdesignation(){
            $company_id=$_SESSION['company_id'];
        $this->db->where('company_id',$company_id);
      $this->db->where('is_deleted',0);
        $qry=$this->db->get('designation');
        return $qry->result();
    }

    public function designationupdate(){
        $date=date("Y-m-d");
        $id=$this->input->post('id');
        $data=array(
            'name'=> $this->input->post('designation'),
            
            'updated_on'=>$date,
        );
        $this->db->where('id',$id);
    
        
        $this->db->update('designation',$data);
    }
    public function designationdelete(){
        $date=date("Y-m-d");
        $id=$this->input->post('id');
            $data=array(
            'deleted_on'=>$date,
            'is_deleted'=>1,
        );

        $this->db->where('id',$id);
        $qry=$this->db->update('designation',$data);
    
    }






function show_managers()
 {
    $id=$this->input->post('id');
  $this->db->where('is_deleted',0);
  $this->db->where('account_id',$id);
$query=$this->db->get('company_staff');
  return $query->result();
 }

function show_accounts()
 {
    
 
$query=$this->db->query("select * from accounts where type='Company' or type='Individual' and is_deleted=0");
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