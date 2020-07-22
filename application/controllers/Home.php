<?php
defined('BASEPATH') OR exit('No direct script access allowed');

    class Home extends CI_Controller {

	
	public function index()
	{
            if(!isset($_SESSION['login'])){


        redirect('Login');
       }
        $this->load->view('admin/header');
        $this->load->view('admin/sidebar');
		$this->load->view('user/HomeView');
        $this->load->view('admin/footer');
     
	}
  
        
}
?>