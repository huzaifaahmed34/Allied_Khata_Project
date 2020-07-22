<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Company extends CI_Controller{
	function __construct(){
		parent::__construct();
		       
       if(!isset($_SESSION['login'])){


        redirect('Login');
       }
		$this->load->model('Company_model','m');
	}
public function View_Company(){
 $this->load->view('admin/header');
        $this->load->view('admin/sidebar');
		$this->load->view('user/View_Company');
              $this->load->view('admin/footer');

}

 public function Add_company()
    { $this->load->view('admin/header');
        $this->load->view('admin/sidebar');

        $this->load->view('user/add_company');
         $this->load->view('admin/footer');
    }
  public function save_company()
    {
     

        $path='./uploads/';
            $config['upload_path'] =$path;
                $config['allowed_types']='jpg|png|jpeg|';

              
                $this->load->library('upload');
                $this->upload->initialize($config);


                $img = 'logo'; // input name="img"


              $this->upload->do_upload($img);
        $image=$_FILES['logo']['name'];
      
        $data=$this->m->save_company($image);
        echo json_encode($data);
        
    }  


  public function show_company()
    {
        $data=$this->m->show_company();
		echo json_encode($data);
    }


         public function edit_company()
    {
        $data=$this->m->edit_company();
		echo json_encode($data);
    }
   public function update_company()
    {
         $img = 'logo'; // input name="img"
$i=$this->input->post('hidden');

$j=$_FILES['logo']['name'];
if($j==''){
    $image=$i;
    
}else
    {  $path='./uploads/';
            $config['upload_path'] =$path;
                $config['allowed_types']='jpg|png|jpeg|';


              
                $this->load->library('upload');
                $this->upload->initialize($config);
                $image=$j;

              $this->upload->do_upload($img);

      
     
}
        $data=$this->m->update_company($image);
		echo json_encode($data);
    }
 public function delete_company()
    {
        $data=$this->m->delete_company();
		echo json_encode($data);
    }

         public function company_status()
    {
    
        $data=$this->m->company_status();
        echo json_encode($data);
        
    }
    
}
