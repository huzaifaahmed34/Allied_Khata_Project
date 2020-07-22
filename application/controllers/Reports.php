<?php header('Access-Control-Allow-Origin: *'); ?><?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reports extends CI_Controller{
	function __construct(){
		parent::__construct();
		       
       if(!isset($_SESSION['login'])){


        redirect('Login');
       }
		$this->load->model('Report_model','m');
	}
	function invoice_reports(){
          $this->load->view('admin/header');
        $this->load->view('admin/sidebar');
		$this->load->view('user/invoice_reports');
              $this->load->view('admin/footer');
		
       
	} 
	function 	account_detail_report(){

          $this->load->view('admin/header');
        $this->load->view('admin/sidebar');
		$this->load->view('print/account_detail_report');
              $this->load->view('admin/footer');
		
       
	}
	 function 	print_account_report(){

          $this->load->view('admin/header');
        $this->load->view('admin/sidebar');
		$this->load->view('print/print_account_report');
              $this->load->view('admin/footer');
		
       
	} 
	function 	print_payment_report(){
	
          $this->load->view('admin/header');
        $this->load->view('admin/sidebar');
		$this->load->view('print/payment_report');
              $this->load->view('admin/footer');
		
       
	}
		function 	print_receipt_report(){
	
          $this->load->view('admin/header');
        $this->load->view('admin/sidebar');
		$this->load->view('print/receipt_report');
              $this->load->view('admin/footer');
		
       
	} 

		function Bank_Payment_report(){
	
          $this->load->view('admin/header');
        $this->load->view('admin/sidebar');
		$this->load->view('user/Bank_Payment_report');
              $this->load->view('admin/footer');
		
       
	} 


	function Bank_Receipt_report(){
	
          $this->load->view('admin/header');
        $this->load->view('admin/sidebar');
		$this->load->view('user/Bank_Receipt_report');
              $this->load->view('admin/footer');
		
       
	} 

	function bank_payment_report_print(){
	
          $this->load->view('admin/header');
        $this->load->view('admin/sidebar');
		$this->load->view('print/bank_payment_report');
              $this->load->view('admin/footer');
		
       
	} 
	function bank_receipt_report_print(){
	
          $this->load->view('admin/header');
        $this->load->view('admin/sidebar');
		$this->load->view('print/bank_receipt_report');
              $this->load->view('admin/footer');
		
       
	} 
		function report3(){
$array=$this->input->post('array');
		$_SESSION['bank_receipt_array']=$array;

}
function report4(){
$array=$this->input->post('array');
		$_SESSION['bank_payment_array']=$array;

}
	function report1(){
		
	$array=$this->input->post('array');
		$_SESSION['payment_array']=$array;
	}
	function report2(){
		
	$array=$this->input->post('array');
		$_SESSION['receipt_array']=$array;
	}
	function report(){
			$array=$this->input->post('array');
		$_SESSION['array']=$array;
	}

	function Payment_report(){
          $this->load->view('admin/header');
        $this->load->view('admin/sidebar');
		$this->load->view('user/payment_report');
              $this->load->view('admin/footer');
		
       
	} 

function Receipt_report(){
          $this->load->view('admin/header');
        $this->load->view('admin/sidebar');
		$this->load->view('user/Receipt_report');
              $this->load->view('admin/footer');
		
       
	} 
		function show_report(){
          
        $data=$this->m->show_report();
        echo json_encode($data);
        
		
       
	}function show_payment_report(){
          
        $data=$this->m->show_payment_report();
        echo json_encode($data);
        
		
       
	}
	function show_bank_payment_report(){
          
        $data=$this->m->show_bank_payment_report();
        echo json_encode($data);
        
		
       
	}
	function show_bank_receipt_report(){
          
        $data=$this->m->show_bank_receipt_report();
        echo json_encode($data);
        
		
       
	}
		function show_receipt_report(){
          
        $data=$this->m->show_receipt_report();
        echo json_encode($data);
        
		
       
	}
}