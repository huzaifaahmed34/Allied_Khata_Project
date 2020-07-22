<?php
class Invoice_model extends CI_Model{

    
	public function add_invoice()
{
$array=$this->input->post('itemList');
     $count=0;
  foreach($array as $arr){
    
  
  $date=date('Y-m-d');

    if($count<1){
    $data=array(
           'user_id'=>$_SESSION['user_id'],
    'customer_id'=>$arr[1],
    'date'=>$date,

    'remarks'=>$arr[14],
'user_id'=>$_SESSION['user_id'],
    'amount'=>$arr[10],
     'disc_perc'=>$arr[11],
    'disc_amount'=>$arr[12],
  
    'net_amount'=>$arr[13],
   'advance_perc'=>$arr[15],
  'company_id'=>$_SESSION['company_id'],
    'advance_amount'=>$arr[16],

'attention'=>$arr[17],
'delivery'=>$arr[18],
'payment_remarks'=>$arr[19],
'valid'=>$arr[20],
'lpo_number'=>$arr[21],

    'created_on'=>$date,
     'is_deleted'=> 0   ,
    );


     $qr2=$this->db->insert('invoice',$data);

$this->db->select_max('id');
     $last_row= $this->db->get('invoice')->result();
 foreach ($last_row as $r) {
    $v=$r->id; 
}     



    $da=array(
      'invoice_id'=>$v,
    'account_id'=>$arr[1],
    'date'=>$date,
'user_id'=>$_SESSION['user_id'],
    'remarks'=>'Generate Invoice Invoice no '.$v,
  'company_id'=>$_SESSION['company_id'],
    'amount'=>$arr[13],

    'created_on'=>$date,
    
    );
if($arr[16]!=0){
         $d=array(
            'invoice_id'=>$v,
    'account_id'=>$arr[1],
    'date'=>$date,
'user_id'=>$_SESSION['user_id'],
    'remarks'=>'Generate Invoice Invoice no '.$v,
'type'=>'advance',
    'amount'=>-1*$arr[16],
  'company_id'=>$_SESSION['company_id'],
    'created_on'=>$date,

    
    );


   }
   
   else{
            $d=array(
            'invoice_id'=>$v,
    'account_id'=>$arr[1],
    'date'=>$date,
'user_id'=>$_SESSION['user_id'],
    'remarks'=>'Generate Invoice Invoice no '.$v,
'type'=>'advance',
    'amount'=>0,
  'company_id'=>$_SESSION['company_id'],
    'created_on'=>$date,

    
    );

       
   }
     $this->db->query("update accounts set balance=balance+'$arr[13]'-'$arr[16]' where id='$arr[1]'"); 

     $this->db->insert('transaction',$da);
     
 $this->db->insert('transaction',$d);
    }

    
  

    $data=array(
  'invoice_id'=>$v,
    'customer_id'=>$arr[1],
    'description'=>$arr[3],
       'date'=>$arr[2],
 'unit'=>$arr[4],
     'rate'=>$arr[5],
     'qty'=>$arr[6],
    'discount_percentage'=>$arr[7],
    'discount_amount'=>$arr[8],
    'net_amount'=>$arr[9],
    'date'=>$arr[2],
       'created_on'=>$date,
     'is_deleted'=> 0    
    );
    
     $this->db->insert('invoice_details',$data);
  
$count++;   }


	}

    public function show_customer(){
       $comp_id=$_SESSION['company_id'];

        $qry=$this->db->query("select * from accounts where is_deleted=0 and company_id='$comp_id'");
        return $qry->result();
    }

    public function invoice_detail_show(){
        $id=$this->input->post('id');
        $this->db->where('is_deleted',0);
         $this->db->where('invoice_id',$id);
        $qry=$this->db->get('invoice_details');
        return $qry->result();
    }



    public function invoice_show(){
      $comp_id=$_SESSION['company_id'];
        $qry=$this->db->query("select q.id,q.date,q.company_id,q.amount,q.disc_perc,q.disc_amount,q.net_amount,q.lpo_number,a.fullname,q.advance_amount from invoice as q,accounts as a where a.id=q.customer_id and a.is_deleted=0 and q.is_deleted=0 and  q.company_id='$comp_id'");
        return $qry->result();
    }
    

 public function invoice_detail_show1(){
        
         
$this->db->select_max('invoice_id');

        $last_row=$this->db->get('invoice_details')->result();
        foreach ($last_row as $r) {
        $v=$r->invoice_id; 
    $this->db->where('invoice_id',$v);
    $qry=$this->db->get('invoice_details');
    return $qry->result();  
}


}
function show_Invoicedetails()
 {
    $id=$this->input->post('id');
 $this->db->where('invoice_id',$id);
  $this->db->where('is_deleted',0);
$query=$this->db->get('invoice_details');
  return $query->result();
 }
 function edit_Invoicedetails()
 {
    $id=$this->input->post('id');
 $this->db->where('id',$id);
$query=$this->db->get('invoice_details');
  return $query->result();
 }
function edit_Invoice()
 {
    $id=$this->input->post('id');
 $this->db->where('id',$id);
$query=$this->db->get('invoice');
  return $query->result();
 }
 function delete_invoice()
 {
    $date=date('Y-m-d');
    $id=$this->input->post('id');
    $this->db->where('id',$id);
    $qry=$this->db->get('invoice')->result();
foreach ($qry as $r) {
  $nettotal=$r->net_amount;
  $advance_amount=$r->advance_amount;
    $c=$r->customer_id;
}


$this->db->query("update accounts set balance=balance-('$nettotal'-'$advance_amount') where id='$c'");

$this->db->where('invoice_id',$id);
$this->db->delete('transaction');

   $this->db->query("UPDATE invoice as q,invoice_details as qd SET  q.is_deleted=1, qd.is_deleted=1 WHERE qd.invoice_id=q.id and qd.invoice_id='$id'");


 }
function delete_invoicedetails()
 {
    
    $date=date('Y-m-d');
    $id=$this->input->post('id');
 $qid=$this->input->post('qid');
  $dis=$this->input->post('dis');
    $amo=$this->input->post('hiddenvalue3');


  $c=$this->input->post('c');


  $sub=$this->input->post('sub');    

  $total=$this->input->post('total'); 
    $data=array(
        'deleted_on'=>$date,
        'is_deleted'=>1);
$this->db->where('id',$id);
$this->db->update('invoice_details',$data);
$t=$total-$sub;
  $totaldamnt=$t*$dis*(1/100);

$nettotal=$t-$totaldamnt;
$btotal=$nettotal-$amo;


$this->db->query("update transaction set amount='$nettotal' where invoice_id='$qid' and type!='advance'");

$this->db->where('id',$qid);
$k=$this->db->get('invoice')->result();

foreach($k as $key) {

  $v=$key->net_amount;


}
$am=$v-$nettotal;
$this->db->query("update accounts set balance=balance-'$am' where id='$c'");



$this->db->query("update invoice set amount ='$t',disc_amount='$totaldamnt',net_amount='$nettotal',advance_amount='$amo' where id='$qid'");






 }



function insert_invoice(){
   
$data=array(
 'invoice_id'=>$this->input->post('idadd'),
    'customer_id'=>$this->input->post('customeradd'),
    'description'=>$this->input->post('descriptionadd'),
       'date'=>$this->input->post('dateadd'),
 'unit'=>$this->input->post('unitadd'),
     'rate'=>$this->input->post('rateadd'),
     'qty'=>$this->input->post('qtyadd'),
    'discount_percentage'=>$this->input->post('discountadd'),
    'discount_amount'=>$this->input->post('damntadd'),
    'net_amount'=>$this->input->post('totaladd'),
    
);
$this->db->insert('invoice_details',$data);
$id=$this->input->post('idadd');
$t=$this->input->post('totaladd');
$total=$this->input->post('totaladd');
$c=$this->input->post('customeradd');

$this->db->query("update transaction set amount=amount+'$total' where invoice_id='$id' and type!='advance'");

$this->db->query("update accounts set balance=balance+'$total' where id='$c'");




$this->db->query("update invoice set amount=amount+'$t',disc_amount=(amount*disc_perc/100),net_amount=(amount-disc_amount) where id='$id' ");


}




function update_invoice()
 {
    $id=$this->input->post('id');
$amount=$this->input->post('subtotal');
$nettotal=$this->input->post('nettotal');
$dis=$this->input->post('totaldamnt');

$adv=$this->input->post('advance_amount');
$c=$this->input->post('customer1');
 $date=date('Y-m-d');
 
$data1=array(
        
        'customer_id'=>$this->input->post('customer1'),
            'remarks'=>$this->input->post('remarks'),
        'amount'=>$this->input->post('subtotal'),
        'disc_perc'=>$this->input->post('totaldiscount'),
        'disc_amount'=>$this->input->post('totaldamnt'),
        'net_amount'=>$this->input->post('nettotal'),
            'advance_amount'=>$this->input->post('advance_amount'),
           
         'lpo_number'=>$this->input->post('lpo'),
           
        
        'updated_on'=>$date,
);



$que=$this->db->query("select * from transaction where invoice_id='$id' and type='advance'")->result();

foreach($que as $key) {

  $oldadv=$key->amount;

$oldadv=-1*$oldadv;

}
$newadv=$oldadv-$adv;
$this->db->query("update accounts set balance=balance+'$newadv' where id='$c'");





$this->db->query("update transaction set amount='$nettotal',account_id='$c' where invoice_id='$id' and type!='advance'" );

$this->db->query("update transaction set amount='-$adv',account_id='$c' where invoice_id='$id' and type='advance'" );

$this->db->where('id',$id);
$k=$this->db->get('invoice')->result();

foreach($k as $key) {

  $v=$key->net_amount;


}
$am=$v-$nettotal;
$this->db->query("update accounts set balance=balance-'$am' where id='$c'");

$this->db->where('id',$id);

$this->db->update('invoice',$data1);



 }
 

function update_invoicedetails()
 {
    


 $date=date('Y-m-d');
    $id=$this->input->post('id2');
    $q_id=$this->input->post('cnid2');

$this->db->where('id',$id);
$sel=$this->db->get('invoice_details');
return $sel->result();


 


 }




function update_invoicedetails1(){
   $id=$this->input->post('id2');
    $q_id=$this->input->post('cnid2');
    $old_total=$this->input->post('hiddenvalue');
     $dis=$this->input->post('hiddenvalue1');
      $amount=$this->input->post('hiddenvalue2');
      $adv=$this->input->post('hiddenvalue3');
     $date=date('y-m-d');
$c=$this->input->post('customer');
$data1=array(
        
   
    'customer_id'=>$this->input->post('customer'),
    'description'=>$this->input->post('description'),
       'date'=>$this->input->post('date'),
 'unit'=>$this->input->post('unit'),
     'rate'=>$this->input->post('rate'),
     'qty'=>$this->input->post('qty'),
    'discount_percentage'=>$this->input->post('discount'),
    'discount_amount'=>$this->input->post('damnt'),
    'net_amount'=>$this->input->post('total'),
    
        'updated_on'=>$date,
);
$this->db->where('id',$id);
$r=$this->db->update('invoice_details',$data1);



$this->db->where('id',$id);
$sel1=$this->db->get('invoice_details')->result();


 foreach ($sel1 as $res) {
 
    $new_total=$res->net_amount; 

}     


$dif=$old_total-$new_total;

$total=round($amount-$dif,2);
  $totaldamnt=round($total*$dis*(1/100),2);

$nettotal=round($total-$totaldamnt,2);



$this->db->query("update transaction set amount='$nettotal' where invoice_id='$q_id' and type!='advance'");

$this->db->where('id',$q_id);
$k=$this->db->get('invoice')->result();

foreach($k as $key) {

  $v=$key->net_amount;


}
$am=$v-$nettotal;
$this->db->query("update accounts set balance=balance-'$am' where id='$c'");




$this->db->query("update invoice set amount ='$total',disc_amount='$totaldamnt',net_amount='$nettotal' where id='$q_id'");



}

 public function  edit_invoice_print(){
      
         
$id=$this->input->post('id');

$q=$this->db->query("select attention from invoice where id='$id'")->result();
foreach($q as $qo){
    $attention=$qo->attention;
    
}
if($attention!=''){
        $qry=$this->db->query("select q.amount,q.net_amount,q.remarks,q.attention,q.delivery,q.payment_remarks,q.disc_perc,q.disc_amount,q.id,q.valid,qd.description,q.lpo_number,q.advance_amount,qd.unit,qd.discount_amount,qd.discount_percentage,qd.rate,qd.qty,qd.net_amount as qd_amount,q.date,a.fullname,q.quotation_id,d.name as designation,c.firstname,c.lastname,a.phone,a.email from invoice as q,invoice_details as qd,accounts as a,company_staff as c,designation as d  where q.id=qd.invoice_id and a.id=q.customer_id  and q.attention=c.id  and a.id=c.account_id and a.is_deleted=0 and d.id=c.designation and q.is_deleted=0 and q.status=0 and q.id='$id' and qd.is_deleted=0 ");
       }
       else{
            $qry=$this->db->query("select q.amount,q.net_amount,q.remarks,q.attention,q.delivery,q.payment_remarks,q.disc_perc,q.disc_amount,q.id,q.valid,qd.description,q.lpo_number,q.advance_amount,qd.unit,qd.discount_amount,qd.discount_percentage,qd.rate,qd.qty,qd.net_amount as qd_amount,q.date,a.fullname,q.quotation_id,a.phone,a.email from invoice as q,invoice_details as qd,accounts as a  where q.id=qd.invoice_id and a.id=q.customer_id    and a.is_deleted=0 and q.is_deleted=0 and q.status=0 and q.id='$id' and qd.is_deleted=0 ");
           
       }
       
       return $qry->result();
    }

 public function  edit_invoice_print1(){
      
      $com=$_SESSION['company_id'];
      
$this->db->select_max('id');

        $last_row=$this->db->get('invoice')->result();
        foreach ($last_row as $r) {
    $v=$r->id; 

$q=$this->db->query("select attention from invoice where id='$v'")->result();
foreach($q as $qo){
    $attention=$qo->attention;
    
}
if($attention!=''){
        $qry=$this->db->query("select q.amount,q.net_amount,q.remarks,q.attention,q.delivery,q.payment_remarks,q.disc_perc,q.disc_amount,q.id,q.valid,qd.description,q.lpo_number,q.advance_amount,qd.unit,qd.discount_amount,qd.discount_percentage,qd.rate,qd.qty,qd.net_amount as qd_amount,q.date,a.fullname,q.quotation_id,d.name as designation,c.firstname,c.lastname,a.phone,a.email from invoice as q,invoice_details as qd,accounts as a,company_staff as c,designation as d  where q.id=qd.invoice_id and a.id=q.customer_id  and q.attention=c.id  and a.id=c.account_id and a.is_deleted=0 and d.id=c.designation and q.is_deleted=0 and q.status=0 and q.id='$v' and qd.is_deleted=0 ");
       }
       else{
            $qry=$this->db->query("select q.amount,q.net_amount,q.remarks,q.attention,q.delivery,q.payment_remarks,q.disc_perc,q.disc_amount,q.id,q.valid,qd.description,q.lpo_number,q.advance_amount,qd.unit,qd.discount_amount,qd.discount_percentage,qd.rate,qd.qty,qd.net_amount as qd_amount,q.date,a.fullname,q.quotation_id,a.phone,a.email from invoice as q,invoice_details as qd,accounts as a  where q.id=qd.invoice_id and a.id=q.customer_id    and a.is_deleted=0 and q.is_deleted=0 and q.status=0 and q.id='$v' and qd.is_deleted=0 ");
           
       }
        return $qry->result();
    }
}
}
