<?php
class Voucher_model extends CI_Model{


public function add_payment_voucher()
{
  $array=$this->input->post('itemList');

  $total=$this->input->post('total');

    
     $count=0;
    
  foreach ($array as $arr) {
    
	$date=date('Y-m-d');
    if($count<1){
    $data=array(
           'user_id'=>$_SESSION['user_id'],

    'date'=>$date,
 'type'=>'Payment Voucher',   
    'amount'=>$total,
    'company_id'=>$_SESSION['company_id'],

    
    );
     $qr2=$this->db->insert('voucher',$data);
  }

    
  
    
$this->db->select_max('id');
     $last_row= $this->db->get('voucher')->result();
 foreach ($last_row as $r) {
    $v=$r->id; 
}     

    $data=array(
      'voucher_id'=>$v,
    'user_id'=>$_SESSION['user_id'],
    'account_id'=>$arr[3],
    'date'=>$arr[1],

    'remarks'=>$arr[4],

    'amount'=>$arr[2],
     'company_id'=>$_SESSION['company_id'],

    );
    
     $this->db->insert('transaction',$data);
  

$this->db->query("update accounts set balance=balance+'$arr[2]' where id='$arr[3]'");



$count++;  





 }
}


public function add_bank_voucher()
{
  $array=$this->input->post('itemList');

  $total=$this->input->post('total');

  $credit=$this->input->post('credit');
  $debit=$this->input->post('debit');

    
     $count=0;
    
  foreach ($array as $arr) {
    
  $date=date('Y-m-d');
    if($count<1){
    $data=array(
           'user_id'=>$_SESSION['user_id'],

    'date'=>$date,
 'type'=>'Bank Payment Voucher',   
    'amount'=>$total,
      'credit'=>$credit,
        'debit'=>$debit,
 'company_id'=>$_SESSION['company_id'],

    
    );
     $qr2=$this->db->insert('voucher',$data);
  }

    
  
    
$this->db->select_max('id');
     $last_row= $this->db->get('voucher')->result();
 foreach ($last_row as $r) {
    $v=$r->id; 
}     
if($arr[2]>0){
    $arr[2]=$arr[2];
    $type='Debit';
  }
  else{
   $arr[2]=-1*$arr[3];
    $type='Credit';
  }
    $data=array(
      'voucher_id'=>$v,
    'user_id'=>$_SESSION['user_id'],
    'account_id'=>$arr[4],
    'date'=>$arr[1],
    'amount'=>$arr[2],
'type'=>$type,
    'remarks'=>$arr[5],
 'company_id'=>$_SESSION['company_id'],

    );
    
     $this->db->insert('transaction',$data);
  
if($arr[2]>0){
$this->db->query("update accounts set balance=balance+'$arr[2]' where id='$arr[4]'");
}
else{
  $this->db->query("update accounts set balance=balance-'$arr[3]' where id='$arr[4]'");
}




$count++;  





 }
}


public function show_payment_voucher_print(){
          $this->db->where('company_id',$_SESSION['company_id']);
$this->db->select_max('id');

        $last_row=$this->db->get('voucher')->result();
        foreach ($last_row as $r) {
        $v=$r->id; }

        $qry=$this->db->query("select * from voucher as v,transaction as t,accounts as a where v.id=t.voucher_id and t.account_id=a.id and v.id='$v'");
return $qry->result();




}

public function add_bank_receipt_voucher()
{
  $array=$this->input->post('itemList');

  $total=$this->input->post('total');

  $credit=$this->input->post('credit');
  $debit=$this->input->post('debit');

    
     $count=0;
    
  foreach ($array as $arr) {
    
  $date=date('Y-m-d');
    if($count<1){
    $data=array(
           'user_id'=>$_SESSION['user_id'],
 'company_id'=>$_SESSION['company_id'],
    'date'=>$date,
 'type'=>'Bank Receipt Voucher',   
    'amount'=>$total,
      'credit'=>$credit,
        'debit'=>-1*$debit,
         'company_id'=>$_SESSION['company_id'],


    
    );
     $qr2=$this->db->insert('voucher',$data);
  }

    
  
    $this->db->where('company_id',$_SESSION['company_id']);
$this->db->select_max('id');
     $last_row= $this->db->get('voucher')->result();
 foreach ($last_row as $r) {
    $v=$r->id; 
}     
if($arr[2]>0){
    $arr[2]=(-1*$arr[2]);
    $type='Debit';
  }
  else{
   $arr[2]=$arr[3];
    $type='Credit';
  }
    $data=array(
      'voucher_id'=>$v,
    'user_id'=>$_SESSION['user_id'],
    'account_id'=>$arr[4],
    'date'=>$arr[1],
    'amount'=>$arr[2],
'type'=>$type,
    'remarks'=>$arr[5],
     'company_id'=>$_SESSION['company_id'],


    );
    
     $this->db->insert('transaction',$data);
  
if($arr[2]>0){
  $this->db->query("update accounts set balance=balance+'$arr[2]' where id='$arr[4]'");

}
else{
  $this->db->query("update accounts set balance=balance+'$arr[2]' where id='$arr[4]'");
}




$count++;  





 }
}


public function add_receipt_voucher()
{
  $array=$this->input->post('itemList');
 $total=$this->input->post('total');
    
     $count=0;
    
  foreach ($array as $arr) {
    
  $date=date('Y-m-d');
    if($count<1){
    $data=array(
           'user_id'=>$_SESSION['user_id'],

    'date'=>$date,
 'type'=>'Receipt Voucher',   
    'amount'=>$total,

     'company_id'=>$_SESSION['company_id'],

    );
     $qr2=$this->db->insert('voucher',$data);
  }

    
  
    
$this->db->select_max('id');
     $last_row= $this->db->get('voucher')->result();
 foreach ($last_row as $r) {
    $v=$r->id; 
}     

    $data=array(
      'voucher_id'=>$v,
    'user_id'=>$_SESSION['user_id'],
    'account_id'=>$arr[3],
    'date'=>$arr[1],

    'remarks'=>$arr[4],

    'amount'=>-1*$arr[2],
     'company_id'=>$_SESSION['company_id'],

    );
    
     $this->db->insert('transaction',$data);
  

$this->db->query("update accounts set balance=balance-'$arr[2]' where id='$arr[3]'");



$count++;  





 }
}



public function voucher_id(){

$qry=$this->db->query('select max(id)+1 as id from voucher');
return $qry->result();


}

public function show_bank_balance(){
$id=$this->input->post('id');

$qry=$this->db->query("select id,balance from accounts where id='$id'");
return $qry->result();


}
public function show_bank_customer(){
 $comp_id=$_SESSION['company_id'];

$qry=$this->db->query("select * from accounts where type='bank' and is_deleted=0 and company_id='$comp_id'");
return $qry->result();


}


public function show_bank_customer1(){
 $comp_id=$_SESSION['company_id'];

$qry=$this->db->query("select * from accounts where type!='bank' and is_deleted=0 and company_id='$comp_id'");
return $qry->result();


}


}

?>