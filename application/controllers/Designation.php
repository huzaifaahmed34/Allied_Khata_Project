<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Designation extends CI_Controller{
    function __construct(){
        parent::__construct();
                    if(!isset($_SESSION['login'])){


        redirect('Login');
       }
  
        $this->load->model('Designation_model','m');
    } 
        public function Add_Designation()
    {
        $this->load->view('admin/header');
        $this->load->view('admin/sidebar');

        $this->load->view('user/add_designation');
        $this->load->view('admin/footer');
    }
          public function View_Designation()
    {
        $this->load->view('admin/header');
        $this->load->view('admin/sidebar');

        $this->load->view('user/View_designation');
        $this->load->view('admin/footer');
    }
public function showdesignation(){

        $data=$this->m->showdesignation();
        echo json_encode($data);
        
    }
    

public function designationadd(){
        
        $data=$this->m->designationadd();
        echo json_encode($data);
        
    }
    public function designationedit(){
   
        $data=$this->m->designationedit();
        echo json_encode($data);
            }

    public function designationupdate(){
    
        $data=$this->m->designationupdate();
        echo json_encode($data);
        
    }
    public function designationdelete(){
     
        $data=$this->m->designationdelete();
        echo json_encode($data);
        
    
    }



}