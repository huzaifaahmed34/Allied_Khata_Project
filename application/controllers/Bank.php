<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bank extends CI_Controller{
	function __construct(){
		parent::__construct();
		       
       if(!isset($_SESSION['login'])){


        redirect('Login');
       }
		$this->load->model('Bank_model','m');
	}
public function View_Bank(){
 $this->load->view('admin/header');
        $this->load->view('admin/sidebar');
		$this->load->view('user/view_bank');
              $this->load->view('admin/footer');

}

 public function Add_bank()
    { $this->load->view('admin/header');
        $this->load->view('admin/sidebar');

        $this->load->view('user/add_bank');
         $this->load->view('admin/footer');
    }
  public function save_bank()
    {
     

      
        $data=$this->m->save_bank();
        echo json_encode($data);
        
    }  


  public function show_bank()
    {
        $data=$this->m->show_bank();
		echo json_encode($data);
    }


         public function edit_bank()
    {
        $data=$this->m->edit_bank();
		echo json_encode($data);
    }
   public function update_bank()
    {
        

        $data=$this->m->update_bank();
		echo json_encode($data);
    }
 public function delete_bank()
    {
        $data=$this->m->delete_bank();
		echo json_encode($data);
    }

    
}
