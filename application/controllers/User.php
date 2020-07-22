<?php header('Access-Control-Allow-Origin: *'); 


class User extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->helper(array('form','url','html'));
		$this->load->library(array('session', 'form_validation'));
		$this->load->database();

	}



		function Add_User(){
         $this->load->view('admin/header');
        $this->load->view('admin/sidebar');
   
		$this->load->view('user/add_user');
 $this->load->view('admin/footer');
	}
		function View_User(){
             $this->load->view('admin/header');
        $this->load->view('admin/sidebar');
  		$this->load->view('user/view_user');
		 $this->load->view('admin/footer');

       

	}
	public function insert(){
			$this->load->model('user_model');
		$data=$this->user_model->insert();
echo json_encode($data);
	}


  public function show_company()
    {$this->load->model('user_model');
        $data=$this->user_model->show_company();
		echo json_encode($data);
    }


       
		public function showdata(){
			$this->load->model('user_model');
		$data=$this->user_model->showdata();
echo json_encode($data);
	}


		public function user_edit(){
			$this->load->model('user_model');
		$data=$this->user_model->user_edit();
echo json_encode($data);
	}
		public function user_update(){
			$this->load->model('user_model');
		$data=$this->user_model->user_update();
echo json_encode($data);
	}

	public function user_delete(){
			$this->load->model('user_model');
		$data=$this->user_model->user_delete();
echo json_encode($data);
	}
}