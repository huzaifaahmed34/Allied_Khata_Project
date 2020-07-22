<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Invoice extends CI_Controller{
	function __construct(){
		parent::__construct();
	     if(!isset($_SESSION['login'])){


        redirect('Login');
       }
		$this->load->model('Invoice_model','m');
	}
	function index(){
           $this->load->view('admin/header');
        $this->load->view('admin/sidebar');

		$this->load->view('user/generate_invoice');
           $this->load->view('admin/footer');
	} 
    public function invoiceprint(){
      $id=$this->input->post('id');
            $this->load->view('admin/header');
        $this->load->view('admin/sidebar');
    $this->load->view('print/invoiceprint',$id);
                           $this->load->view('admin/footer');
  } 
		function invoice_view(){
               $this->load->view('admin/header');
        $this->load->view('admin/sidebar');


		$this->load->view('user/view_invoice');
          $this->load->view('admin/footer');
       
	} 

        public function printqt(){
             $id=$this->input->post('id');
          $this->load->view('admin/header');
            $this->load->view('admin/sidebar');
            $this->load->view('print/addinvoice');
                           $this->load->view('admin/footer');
  } 



       public function invoice_detail_show1()
    {
     
        $data=$this->m->invoice_detail_show1();
        echo json_encode($data);
        
    }  


        function invoice_add(){
               $this->load->view('admin/header');
        $this->load->view('admin/sidebar');


        $this->load->view('user/generate_invoice');
          $this->load->view('admin/footer');
       
    } 
		 public function invoice_show()
    {
     
        $data=$this->m->invoice_show();
        echo json_encode($data);
        
    } 
    	 public function invoice_detail_show()
    {
     
        $data=$this->m->invoice_detail_show();
        echo json_encode($data);
        
    }  

		 public function add_invoice()
    {
     
        $data=$this->m->add_invoice();
        echo json_encode($data);
        
    }  
        public function edit_invoice_print(){
      
        $data=$this->m->edit_invoice_print1();
        echo json_encode($data);
        
   
    }

      public function print_invoice_Show(){
      
        $data=$this->m->edit_invoice_print();
        echo json_encode($data);
        
   
    }

		 public function show_customer()
    {
     
        $data=$this->m->show_customer();
        echo json_encode($data);
        
    } 

     function insert_invoice(){
 
     
        $data=$this->m->insert_invoice();
        echo json_encode($data);
        
    }  

         public function edit_Invoice()
    {
        $data=$this->m->edit_Invoice();
        echo json_encode($data);
    }
  public function show_Invoicedetails()
    {
        $data=$this->m->show_Invoicedetails();
        echo json_encode($data);
    }
      public function edit_Invoicedetails()
    {
        $data=$this->m->edit_Invoicedetails();
        echo json_encode($data);
    }
         public function update_Invoice()
    {
        $data=$this->m->update_Invoice();
        echo json_encode($data);
    }
    public function update_Invoicedetails()
    {
        $data=$this->m->update_Invoicedetails();
        echo json_encode($data);
    }
        public function update_Invoicedetails1()
    {
        $data=$this->m->update_Invoicedetails1();
        echo json_encode($data);
    }
      public function delete_Invoice()
    {
        $data=$this->m->delete_Invoice();
        echo json_encode($data);
    }
    

   public function delete_Invoicedetails()
    {
        $data=$this->m->delete_Invoicedetails();
        echo json_encode($data);
    }
    
}