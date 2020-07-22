<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Vendors extends CI_Controller{
	function __construct(){
		parent::__construct();
		       
       if(!isset($_SESSION['login'])){


        redirect('Login');
       }
		$this->load->model('Vendor_model','m');
	}
public function View_Vendors(){
 $this->load->view('admin/header');
        $this->load->view('admin/sidebar');
		$this->load->view('user/view_vendors');
              $this->load->view('admin/footer');

}

 public function Add_Vendor()
    { $this->load->view('admin/header');
        $this->load->view('admin/sidebar');

        $this->load->view('user/add_vendor');
         $this->load->view('admin/footer');
    }
  public function save_vendor()
    {
     
        $data=$this->m->save_vendor();
        echo json_encode($data);
        
    }  


  public function show_vendor()
    {
        $data=$this->m->show_vendor();
		echo json_encode($data);
    }


         public function edit_vendor()
    {
        $data=$this->m->edit_vendor();
		echo json_encode($data);
    }
   public function update_vendor()
    {
        $data=$this->m->update_vendor();
		echo json_encode($data);
    }
 public function delete_vendor()
    {
        $data=$this->m->delete_vendor();
		echo json_encode($data);
    }
}
