<?php
class Report_model extends CI_Model{



public function show_report(){
	$name=$this->input->post('name');
	$from=$this->input->post('from_date');
	$to=$this->input->post('to_date');
	$comp_id=$_SESSION['company_id'];
		$qry=$this->db->query("select  t.id,t.remarks,t.date,t.amount,a.fullname from transaction as t,accounts as a where t.account_id=a.id and t.account_id='$name' and t.company_id='$comp_id' and (t.date >= '$from' and t.date<= '$to') and t.amount!=0 ");
		return $qry->result();

}



public function show_payment_report(){

	$from=$this->input->post('from_date');
	$to=$this->input->post('to_date');
	$comp_id=$_SESSION['company_id'];


		$qry=$this->db->query("select * from voucher as v,transaction as t,accounts as a where t.account_id=a.id and t.voucher_id=v.id and v.type='Payment Voucher' and v.company_id='$comp_id' and (t.date >= '$from' and t.date<= '$to') ");
		return $qry->result();

}



public function show_receipt_report(){

	$from=$this->input->post('from_date');
	$to=$this->input->post('to_date');
		$comp_id=$_SESSION['company_id'];


		$qry=$this->db->query("select * from voucher as v,transaction as t,accounts as a where t.account_id=a.id and t.voucher_id=v.id and v.company_id='$comp_id' and v.type='Receipt Voucher' and (t.date >= '$from' and t.date<= '$to') ");
		return $qry->result();

}



public function show_bank_payment_report(){

	$from=$this->input->post('from_date');
	$to=$this->input->post('to_date');
		$comp_id=$_SESSION['company_id'];
		$qry=$this->db->query("SELECT * FROM `voucher` as v,transaction as t,accounts as a where t.account_id=a.id and v.id=t.voucher_id  and v.company_id='$comp_id' and v.type='Bank Payment Voucher' and (t.date >= '$from' and t.date<= '$to') ");
		return $qry->result();

}



public function show_bank_receipt_report(){

	$from=$this->input->post('from_date');
	$to=$this->input->post('to_date');
		$comp_id=$_SESSION['company_id'];
		$qry=$this->db->query("SELECT * FROM `voucher` as v,transaction as t,accounts as a where t.account_id=a.id and v.id=t.voucher_id  and v.company_id='$comp_id' and v.type='Bank Receipt Voucher' and (t.date >= '$from' and t.date<= '$to') ");
		return $qry->result();

}

    
    }