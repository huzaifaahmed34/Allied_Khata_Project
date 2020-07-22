<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Employee extends CI_Controller{
	function __construct(){
		parent::__construct();
		       
       if(!isset($_SESSION['login'])){


        redirect('Login');
       }
		$this->load->model('Employee_model','m');
	}
 public function Add_Employee()
    {  $this->load->view('admin/header');
        $this->load->view('admin/sidebar');

        $this->load->view('user/add_employee');
         $this->load->view('admin/footer');
       
    }

public function Employee_view()
    {  $this->load->view('admin/header');
        $this->load->view('admin/sidebar');

        $this->load->view('user/view_employee');
         $this->load->view('admin/footer');
       
    }


 public function save_employee()
    {
     
        $data=$this->m->save_employee();
        echo json_encode($data);
        
    }  


  public function show_employee()
    {
        $data=$this->m->show_employee();
        echo json_encode($data);
    }


         public function edit_employee()
    {
        $data=$this->m->edit_employee();
        echo json_encode($data);
    }
   public function update_employee()
    {
        $data=$this->m->update_employee();
        echo json_encode($data);
    }
 public function delete_employee()
    {
        $data=$this->m->delete_employee();
        echo json_encode($data);
    }



  }