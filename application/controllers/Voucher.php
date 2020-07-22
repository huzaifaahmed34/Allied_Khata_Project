<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Voucher extends CI_Controller{
  function __construct(){
    parent::__construct();
             if(!isset($_SESSION['login'])){


        redirect('Login');
       }
  
    $this->load->model('Voucher_model','m');
  }
  public function Payment_Voucher()
    {  $this->load->view('admin/header');
        $this->load->view('admin/sidebar');

        $this->load->view('user/payment_voucher');
         $this->load->view('admin/footer');
       
    }
    public function Bank_Payment_Voucher()
    {  $this->load->view('admin/header');
        $this->load->view('admin/sidebar');

        $this->load->view('user/Bank_voucher');
         $this->load->view('admin/footer');
       
    }
     public function Bank_Reciept_Voucher()
    {  $this->load->view('admin/header');
        $this->load->view('admin/sidebar');

        $this->load->view('user/bank_receipt_voucher');
         $this->load->view('admin/footer');
       
    }
          public function Receipt_voucher()
            {  
      $this->load->view('admin/header');
        $this->load->view('admin/sidebar');

        $this->load->view('user/Receipt_voucher');
         $this->load->view('admin/footer');
       
    }

  public function add_payment_voucher()
    {
     
        $data=$this->m->add_payment_voucher();
        echo json_encode($data);
        
  }
    public function show_payment_voucher_print()
    {
     
         $data=$this->m->show_payment_voucher_print();
         echo json_encode($data);
        
          
          }
           public function add_to_session()
    {
      $arr=$this->input->post('itemList');
      $_SESSION['payment_voucher_array']=$arr;
     }

    public function add_to_session1()
    {
      $arr=$this->input->post('itemList');
      $_SESSION['receipt_voucher_array']=$arr;
     }
 function add_payment_print(){

  $this->load->view('admin/header');
        $this->load->view('admin/sidebar');

        $this->load->view('print/add_payment_print');
         $this->load->view('admin/footer');
 }
  function account_detail(){

  $this->load->view('admin/header');
        $this->load->view('admin/sidebar');

        $this->load->view('print/accountdetail');
         $this->load->view('admin/footer');
 }

 function add_receipt_print(){

  $this->load->view('admin/header');
        $this->load->view('admin/sidebar');

        $this->load->view('print/add_receipt_print');
         $this->load->view('admin/footer');
 }


 function add_bank_payment_print(){

  $this->load->view('admin/header');
        $this->load->view('admin/sidebar');

        $this->load->view('print/add_bank_payment_print');
         $this->load->view('admin/footer');
 }

  function add_bank_receipt_print(){

  $this->load->view('admin/header');
        $this->load->view('admin/sidebar');

        $this->load->view('print/add_bank_receipt_print');
         $this->load->view('admin/footer');
 }
   public function add_bank_voucher()
    {
     
        $data=$this->m->add_bank_voucher();
        echo json_encode($data);
        
  }
    public function add_bank_receipt_voucher()
    {
     
        $data=$this->m->add_bank_receipt_voucher();
        echo json_encode($data);
        
  }
   public function show_bank_balance()
    {
     
        $data=$this->m->show_bank_balance();
        echo json_encode($data);
        
  }

   public function show_bank_customer()
    {
     
        $data=$this->m->show_bank_customer();
        echo json_encode($data);
        
  }
   public function show_bank_customer1()
    {
     
        $data=$this->m->show_bank_customer1();
        echo json_encode($data);
        
  }
  public function add_receipt_voucher()
    {
     
        $data=$this->m->add_receipt_voucher();
        echo json_encode($data);
        
  }
  public function voucher_id()
    {
     
        $data=$this->m->voucher_id();
        echo json_encode($data);
        
  }
}