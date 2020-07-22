<?php
class Quotation_model extends CI_Model{

    
	public function add_data()
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
'company_id'=>$_SESSION['company_id'],
    'remarks'=>$arr[14],
'user_id'=>$_SESSION['user_id'],
    'amount'=>$arr[10],
     'disc_perc'=>$arr[11],
    'disc_amount'=>$arr[12],
  
    'net_amount'=>$arr[13],
   'advance_perc'=>$arr[15],
  
    'advance_amount'=>$arr[16],
     'subject'=>$arr[21],

'attention'=>$arr[17],
'delivery'=>$arr[18],
'payment_remarks'=>$arr[19],
'valid'=>$arr[20],

    'created_on'=>$date,
     'is_deleted'=> 0   
    );
     $qr2=$this->db->insert('quotation',$data);
  }

    
  
    
$this->db->select_max('id');
     $last_row= $this->db->get('quotation')->result();
 foreach ($last_row as $r) {
    $v=$r->id; 
}     

    $data=array(
  'qoutation_id'=>$v,
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
    
     $this->db->insert('qoutation_details',$data);
  
$count++;   }
	}






function insert_quotation(){
   
$data=array(
 'qoutation_id'=>$this->input->post('idadd'),
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
$this->db->insert('qoutation_details',$data);
$id=$this->input->post('idadd');
$t=$this->input->post('totaladd');
$this->db->query("update quotation set amount=amount+'$t',disc_amount=(amount*disc_perc/100),net_amount=(amount-disc_amount),advance_amount=(net_amount*advance_perc/100) where id='$id' ");


}

function edit_managers()
 {
    $id=$this->input->post('id');
 $this->db->where('account_id',$id);
$query=$this->db->get('company_staff');
  return $query->result();
 }

    public function generate_invoice()
{
$array1=$this->input->post('list1');
$array2=$this->input->post('list2');
     $count=0;
    foreach($array2 as $arr){
        
    
    $date=date('Y-m-d');
if($count<1){
    $data=array(
         'user_id'=>$_SESSION['user_id'],
        'quotation_id'=>$arr[7],
    'customer_id'=>$arr[0],
    'date'=>$date,

    'remarks'=>$arr[1],
'company_id'=>$_SESSION['company_id'],
    'amount'=>$arr[2],
     'disc_perc'=>$arr[3],
    'disc_amount'=>$arr[4],
  
    'net_amount'=>$arr[5],
  'advance_perc'=>$arr[8],
  
    'advance_amount'=>$arr[9],

'attention'=>$arr[10],
'delivery'=>$arr[11],
'payment_remarks'=>$arr[12],
'valid'=>$arr[13],
    'created_on'=>$date,
     'is_deleted'=>0, 
    );
    
      $this->db->insert('invoice',$data);



$this->db->select_max('id');
     $last_row= $this->db->get('invoice')->result();
    
 foreach ($last_row as $r) {
    $v=$r->id; 
}    
        $da=array(
            'invoice_id'=>$v,
    'account_id'=>$arr[0],
    'date'=>$date,
'user_id'=>$_SESSION['user_id'],
    'remarks'=>'Generate Invoice Qt no '.$arr[14],
'company_id'=>$_SESSION['company_id'],
    'amount'=>$arr[5],

    'created_on'=>$date,

    
    );

   if($arr[9]!=0){
         $d=array(
            'invoice_id'=>$v,
    'account_id'=>$arr[0],
    'date'=>$date,
'user_id'=>$_SESSION['user_id'],
'company_id'=>$_SESSION['company_id'],
    'remarks'=>'Generate Invoice Qt no '.$arr[14],
'type'=>'advance',

    'amount'=>-1*$arr[9],

    'created_on'=>$date,

    
    );

 $this->db->insert('transaction',$d);

   }else{
           $d=array(
            'invoice_id'=>$v,
    'account_id'=>$arr[0],
    'date'=>$date,
'user_id'=>$_SESSION['user_id'],
'company_id'=>$_SESSION['company_id'],
    'remarks'=>'Generate Invoice Qt no '.$arr[14],
'type'=>'advance',

    'amount'=>0,

    'created_on'=>$date,

    
    );

 $this->db->insert('transaction',$d);
       
       
       
   }
   
   
   
     $this->db->query("update accounts set balance=balance+'$arr[5]'-'$arr[9]' where id='$arr[0]'"); 

     $this->db->insert('transaction',$da);


};
   
        

$this->db->query("update quotation set status=1 where id='$arr[7]'");


 $count++; }
  
  


  foreach($array1 as $arr){


    $data=array(
  'invoice_id'=>$v,
    'customer_id'=>$arr[0],
    'description'=>$arr[2],
       'date'=>$date,
 'unit'=>$arr[3],
     'rate'=>$arr[4],
     'qty'=>$arr[5],
    'discount_percentage'=>$arr[6],
    'discount_amount'=>$arr[7],
    'net_amount'=>$arr[8],
       'created_on'=>$date,
     'is_deleted'=> 0    
    );
    
     $this->db->insert('invoice_details',$data);
  
}
    }
public function update_invoice(){
$id=$this->input->post('invoiceid');

      $lpo_number=$this->input->post('lpo');
 
       


$qry=$this->db->query("update invoice as i,quotation as q set q.status=1,i.lpo_number='$lpo_number' where i.quotation_id='$id' and q.id='$id'");


}





    public function show_customer(){
        $comp_id=$_SESSION['company_id'];
        $qry=$this->db->query("select * from accounts where is_deleted=0 and type!='bank' and company_id='$comp_id'");
        return $qry->result();
    }

    public function show_customer1(){
    $comp_id=$_SESSION['company_id'];
        $qry=$this->db->query("select * from accounts where is_deleted=0 and type!='bank' and company_id='$comp_id'");
        return $qry->result();
    }

    public function show_customer2(){
     $comp_id=$_SESSION['company_id'];

        $qry=$this->db->query("select * from accounts where is_deleted=0 and type!='Bank' and company_id='$comp_id'");
        return $qry->result();
    }
    public function quotation_detail_show(){
        $id=$this->input->post('id');
        $this->db->where('is_deleted',0);
         $this->db->where('qoutation_id',$id);
        $qry=$this->db->get('qoutation_details');
        return $qry->result();
    }

    public function quotation_show(){
       $comp_id=$_SESSION['company_id'];

        $qry=$this->db->query("select q.id,q.date,q.amount,q.disc_perc,q.company_id,q.disc_amount,q.net_amount,a.fullname from quotation as q,accounts as a where a.id=q.customer_id and a.is_deleted=0 and q.is_deleted=0 and q.status=0 and q.company_id='$comp_id' ");
        return $qry->result();
    }
        public function  print_quotation_Show(){
      $comp=$_SESSION['company_id'];
         $this->db->where('company_id',$comp);
$this->db->select_max('id');

        $last_row=$this->db->get('quotation')->result();
        
        foreach ($last_row as $r) {
    $v=$r->id; 
    
$q=$this->db->query("select attention from quotation where id='$v'")->result();
foreach($q as $qo){
    $attention=$qo->attention;
    
}
if($attention!=''){
        $qry=$this->db->query("select q.amount,q.net_amount,q.remarks,q.attention,q.delivery,q.payment_remarks,q.disc_perc,q.disc_amount,q.subject,q.id,q.valid,qd.description,unit,qd.discount_amount,qd.discount_percentage,qd.rate,qd.qty,qd.net_amount as qd_amount,q.date,a.fullname,d.name as designation,c.firstname,c.lastname,a.phone,a.email from quotation as q,qoutation_details as qd,accounts as a,company_staff as c,designation as d  where q.id=qd.qoutation_id and a.id=q.customer_id and q.attention=c.id and qd.customer_id=a.id and a.id=c.account_id and a.is_deleted=0 and d.id=c.designation and q.is_deleted=0 and qd.is_deleted=0 and q.status=0 and q.id='$v'");
        }
    else{
        
         $qry=$this->db->query("select q.amount,q.net_amount,q.remarks,q.attention,q.delivery,q.payment_remarks,q.disc_perc,q.disc_amount,q.subject,q.id,q.valid,qd.description,qd.unit,qd.discount_amount,qd.discount_percentage,qd.rate,qd.qty,qd.net_amount as qd_amount,q.date,a.fullname,a.phone,a.email from quotation as q,qoutation_details as qd,accounts as a where q.id=qd.qoutation_id and a.id=q.customer_id  and qd.customer_id=a.id and a.is_deleted=0   and q.is_deleted=0 and qd.is_deleted=0 and q.status=0 and q.id='$v' ");
    }   
    return $qry->result();
    }
            
        }
   public function  edit_quotation_print(){
      
         
$id=$this->input->post('id');

    
$q=$this->db->query("select attention from quotation where id='$id'")->result();
foreach($q as $qo){
    $attention=$qo->attention;
    
}
if($attention!=''){
        $qry=$this->db->query("select q.amount,q.subject,q.net_amount,q.remarks,q.attention,q.delivery,q.payment_remarks,q.disc_perc,q.disc_amount,q.id,q.valid,qd.description,unit,qd.discount_amount,qd.discount_percentage,qd.rate,qd.qty,qd.net_amount as qd_amount,q.date,a.fullname,d.name as designation,c.firstname,c.lastname,a.phone,a.email from quotation as q,qoutation_details as qd,accounts as a,company_staff as c,designation as d  where q.id=qd.qoutation_id  and q.attention=c.id  and a.id=q.customer_id and a.id=c.account_id and a.is_deleted=0 and d.id=c.designation and q.is_deleted=0 and qd.is_deleted=0 and q.status=0 and q.id='$id' ");
      }
      else{
          $qry=$this->db->query("select q.amount,q.subject,q.net_amount,q.remarks,q.attention,q.delivery,q.payment_remarks,q.disc_perc,q.disc_amount,q.id,q.valid,qd.description,qd.unit,qd.discount_amount,qd.discount_percentage,qd.rate,qd.qty,qd.net_amount as qd_amount,q.date,a.fullname,a.phone,a.email from quotation as q,qoutation_details as qd,accounts as a where q.id=qd.qoutation_id and a.id=q.customer_id  and qd.customer_id=a.id and a.is_deleted=0   and q.is_deleted=0 and qd.is_deleted=0 and q.status=0 and q.id='$id' ");
          }
          return $qry->result();
    }
  

    public function quotation_detail_show1(){
        
         
$this->db->select_max('qoutation_id');

        $last_row=$this->db->get('qoutation_details')->result();
        foreach ($last_row as $r) {
    $v=$r->qoutation_id; 
    $this->db->where('qoutation_id',$v);
    $qry=$this->db->get('qoutation_details');

return $qry->result();  
}





    }


















function show_quotationdetails()
 {
    $id=$this->input->post('id');
 $this->db->where('qoutation_id',$id);
  $this->db->where('is_deleted',0);
$query=$this->db->get('qoutation_details');
  return $query->result();
 }


 function edit_quotationdetails()
 {
    $id=$this->input->post('id');
 $this->db->where('id',$id);
$query=$this->db->get('qoutation_details');
  return $query->result();
 }
function edit_quotation()
 {
    $id=$this->input->post('id');
 $this->db->where('id',$id);
$query=$this->db->get('quotation');
  return $query->result();
 }

function delete_quotationdetails()
 {
    
    $date=date('Y-m-d');
    $id=$this->input->post('id');
 $qid=$this->input->post('qid');
  $dis=$this->input->post('dis');
    $amo=$this->input->post('hiddenvalue3');


  $sub=$this->input->post('sub');    

  $total=$this->input->post('total'); 
    $data=array(
        'deleted_on'=>$date,
        'is_deleted'=>1);
$this->db->where('id',$id);
$this->db->update('qoutation_details',$data);
$t=$total-$sub;
  $totaldamnt=$t*$dis*(1/100);

$nettotal=$t-$totaldamnt;
$advance=$nettotal*$amo*(1/100);
$this->db->query("update quotation set amount ='$t',disc_amount='$totaldamnt',net_amount='$nettotal',advance_amount='$advance' where id='$qid'");






 }



 function delete_quotation()
 {
    $date=date('Y-m-d');
    $id=$this->input->post('id');
   $this->db->query("UPDATE quotation as q,qoutation_details as qd SET  q.is_deleted=1, qd.is_deleted=1 WHERE qd.qoutation_id=q.id and qd.qoutation_id='$id'");

 }

function update_quotation()
 {
    $id=$this->input->post('id');

 $date=date('Y-m-d');

$data1=array(
        
        'customer_id'=>$this->input->post('customer1'),
            'remarks'=>$this->input->post('remarks'),
        'amount'=>$this->input->post('subtotal'),
        'disc_perc'=>$this->input->post('totaldiscount'),
        'disc_amount'=>$this->input->post('totaldamnt'),
        'net_amount'=>$this->input->post('nettotal'),
           'advance_perc'=>$this->input->post('advance_perc'),
        'advance_amount'=>$this->input->post('advance_amount'),
        
        'updated_on'=>$date,
);
$this->db->where('id',$id);
$this->db->update('quotation',$data1);


 }
 

function update_quotationdetails()
 {
    


 $date=date('Y-m-d');
    $id=$this->input->post('id2');
    $q_id=$this->input->post('cnid2');

$this->db->where('id',$id);
$sel=$this->db->get('qoutation_details');
return $sel->result();


 


 }




function update_quotationdetails1(){
   $id=$this->input->post('id2');
    $q_id=$this->input->post('cnid2');
    $old_total=$this->input->post('hiddenvalue');
     $dis=$this->input->post('hiddenvalue1');
      $amount=$this->input->post('hiddenvalue2');
      $adv=$this->input->post('hiddenvalue3');
     $date=date('y-m-d');

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
$r=$this->db->update('qoutation_details',$data1);



$this->db->where('id',$id);
$sel1=$this->db->get('qoutation_details')->result();


 foreach ($sel1 as $res) {
 
    $new_total=$res->net_amount; 

}     


$dif=$old_total-$new_total;

$total=round($amount-$dif,2);
  $totaldamnt=round($total*$dis*(1/100),2);

$nettotal=round($total-$totaldamnt,2);

$adva=round($nettotal*$adv*(1/100),2);

$this->db->query("update quotation set amount ='$total',disc_amount='$totaldamnt',net_amount='$nettotal',advance_amount='$adva' where id='$q_id'");



}
}