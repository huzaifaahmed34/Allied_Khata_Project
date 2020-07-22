<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Quotation extends CI_Controller{
	function __construct(){
		parent::__construct();
	     if(!isset($_SESSION['login'])){


        redirect('Login');
       }
		$this->load->model('Quotation_model','m');
	}







	function index(){
            $this->load->view('admin/header');
        $this->load->view('admin/sidebar');
		$this->load->view('generate_quotation');
              $this->load->view('admin/footer');
	} 





    public function quotationprint(){
      $id=$this->input->post('id');
            $this->load->view('admin/header');
        $this->load->view('admin/sidebar');
    $this->load->view('print/quotationprint',$id);
                           $this->load->view('admin/footer');
  } 




  public function printqt(){
      $id=$this->input->post('id');
            $this->load->view('admin/header');
        $this->load->view('admin/sidebar');
    $this->load->view('print/addquotation');
                           $this->load->view('admin/footer');
  } 
    public function accountdetailprint(){
 
            $this->load->view('admin/header');
        $this->load->view('admin/sidebar');
    $this->load->view('print/accountdetail');
                           $this->load->view('admin/footer');
  } 

		function quotation_view(){
           $this->load->view('admin/header');
        $this->load->view('admin/sidebar');
  
		$this->load->view('quotation_view');
         $this->load->view('admin/footer');
       
	} 
            function QuotationView(){
           $this->load->view('admin/header');
        $this->load->view('admin/sidebar');
  
        $this->load->view('user/quotation_view');
         $this->load->view('admin/footer');
       
    } 


    function Add_Quotation(){
           $this->load->view('admin/header');
        $this->load->view('admin/sidebar');
  
        $this->load->view('user/generate_quotation');
         $this->load->view('admin/footer');
       
    } 
		 public function quotation_show()
    {
     
        $data=$this->m->quotation_show();
        echo json_encode($data);
        
    }
     public function update_invoice()
    {
     
        $data=$this->m->update_invoice();
        echo json_encode($data);
        
    } 
    	 public function quotation_detail_show()
    {
     
        $data=$this->m->quotation_detail_show();
        echo json_encode($data);
        
    }  
function insert_quotation(){
 
     
        $data=$this->m->insert_quotation();
        echo json_encode($data);
        
    }  

       public function quotation_detail_show1()
    {
     
        $data=$this->m->quotation_detail_show1();
        echo json_encode($data);
        
    }  

       public function generate_invoice()
    {
     
        $data=$this->m->generate_invoice();
        echo json_encode($data);
        
    }  

		 public function add_data()
    {
     
        $data=$this->m->add_data();
        echo json_encode($data);
        
    }  

		 public function show_customer()
    {
     
        $data=$this->m->show_customer();
        echo json_encode($data);
        
    }  
       public function show_customer2()
    {
     
        $data=$this->m->show_customer2();
        echo json_encode($data);
        
    }  

  public function print_quotation_Show()
    {
     
        $data=$this->m->print_quotation_Show();
        echo json_encode($data);
        
    }  


     public function edit_managers()
    {
     
        $data=$this->m->edit_managers();
        echo json_encode($data);
        
    }  

     public function show_customer1()
    {
     
        $data=$this->m->show_customer1();
        echo json_encode($data);
        
    }  





         public function edit_quotation_print()
    {
        $data=$this->m->edit_quotation_print();
    echo json_encode($data);
    }




         public function edit_quotation()
    {
        $data=$this->m->edit_quotation();
		echo json_encode($data);
    }
  public function show_quotationdetails()
    {
        $data=$this->m->show_quotationdetails();
		echo json_encode($data);
    }
      public function edit_quotationdetails()
    {
        $data=$this->m->edit_quotationdetails();
		echo json_encode($data);
    }
         public function update_quotation()
    {
        $data=$this->m->update_quotation();
		echo json_encode($data);
    }
    public function update_quotationdetails()
    {
        $data=$this->m->update_quotationdetails();
		echo json_encode($data);
    }
        public function update_quotationdetails1()
    {
        $data=$this->m->update_quotationdetails1();
		echo json_encode($data);
    }
      public function delete_quotation()
    {
        $data=$this->m->delete_quotation();
		echo json_encode($data);
    }
    

   public function delete_quotationdetails()
    {
        $data=$this->m->delete_quotationdetails();
		echo json_encode($data);
    }
    
}