<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customer extends CI_Controller{
  function __construct(){
    parent::__construct();
             if(!isset($_SESSION['login'])){


        redirect('Login');
       }
  
    $this->load->model('Customer_model','m');
  }
  public function Add_Accounts()
    {  $this->load->view('admin/header');
        $this->load->view('admin/sidebar');

        $this->load->view('user/accounts');
         $this->load->view('admin/footer');
       
    }
          public function Accounts_View()
    {  $this->load->view('admin/header');
        $this->load->view('admin/sidebar');

        $this->load->view('user/view_accounts');
         $this->load->view('admin/footer');
       
    }
public function view_accounts()
	{
		$this->load->view('view_accounts');
	}
 public function save_accounts_manager()
    {
     
        $data=$this->m->save_accounts_manager();
        echo json_encode($data);
        
    }  


  public function show_accounts()
    {
        $data=$this->m->show_accounts();
		echo json_encode($data);
    }


         public function edit_accounts()
    {
        $data=$this->m->edit_accounts();
		echo json_encode($data);
    }
  public function show_manager()
    {
        $data=$this->m->show_managers();
		echo json_encode($data);
    }
      public function edit_managers()
    {
        $data=$this->m->edit_managers();
		echo json_encode($data);
    }
         public function update_accounts()
    {
        $data=$this->m->update_accounts();
		echo json_encode($data);
    }
     public function add_manager_edit()
    {
        $data=$this->m->add_manager_edit();
    echo json_encode($data);
    }
   
    public function update_managers()
    {
        $data=$this->m->update_managers();
		echo json_encode($data);
    }
   
      public function delete_accounts()
    {
        $data=$this->m->delete_accounts();
		echo json_encode($data);
    }
      
      public function delete_accounts1()
    {
        $data=$this->m->delete_accounts1();
        echo json_encode($data);
    }
    

   public function delete_managers()
    {
        $data=$this->m->delete_managers();
		echo json_encode($data);
    }
    



     public function save_accounts()
    {
     
        $data=$this->m->save_accounts();
        echo json_encode($data);
        
    }  
public function showdesignation(){

        $data=$this->m->showdesignation();
        echo json_encode($data);
        
    }
  }