<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form','url','html'));
		$this->load->library(array('session', 'form_validation'));
		$this->load->database();
		$this->load->model('MyLoginModel','m');
      
	}
    public function index()
    {
		$this->load->view('user/MyLoginView');

    }
    public function login()
    {
          $user_name=$this->input->post('user_name');
          $pass=$this->input->post('password');
       
        $res=$this->m->login($user_name,$pass);
        if($res)
        {
            foreach($res AS $row)
            $sess_data = array(
                'login' => TRUE,
                'user_name' => $row->username,
                'user_id' => $row->id,
             
                'company_id' => $row->company_id,
                'full_name'=>$row->first_name.' '.$row->last_name ,
                 'email'=>$row->email,
               
                'user_type'=>$row->user_type,
            );
            	$this->session->set_userdata($sess_data);
				redirect("Home");
        }
       else
			{
				$this->session->set_flashdata('msg', '<div class="alert alert-danger text-center">Wrong Email-ID or Password!</div>');

				redirect('Login/index');
			}
    }
    public function mySignup()
    {
        $this->load->view('user/SignUpView');
    }
    
    public function insert_user()
    {	
        $this->form_validation->set_rules('fname', 'First Name',                 'trim|required');
        $this->form_validation->set_rules('lname', 'Last Name',                 'trim|required');
         $this->form_validation->set_rules('user_name', 'User Name',                 'trim|required');
          $this->form_validation->set_rules('email', 'Email',                 'trim|required');
          $this->form_validation->set_rules('password', 'Password',                 'trim|required');
        if ($this->form_validation->run() == FALSE)
        {
        $this->load->view('user/SignUpView');
        }
        else
        {
             $pass1=$this->input->post('password');
             $pass2=$this->input->post('conf_pass');
             $user_name=$this->input->post('user_name');
             $email=$this->input->post('email');
            
            
            $res=$this->m->get_user($user_name,$email);
            if($res)
                
            {     
                  $msg="This User name or email already exist!";
                  $this->load->view('user/SignUpView',['msg'=>$msg]);
                //redirect('MyLogin/mySignup',['msg'=>"hy boss"]);
               /* echo '<div class="alert alert-danger text-center">This User Name or email already exist!</div>';
               	redirect('MyLogin/mySignup');*/
                
            }
            elseif($pass1 == $pass2)
            {
                    $res=$this->m->insert_user();
                    $msg="Your Account created successfully!";
		            $this->load->view('user/MyLoginView',['msg'=>$msg]);
                    }
                    else
                    {        
                  $msg="Must match the previous entry!";
                  $this->load->view('user/SignUpView',['msg'=>$msg]);
                    }
        
        }
    }
    public function logout()
    {
        $this->session->sess_destroy();
		redirect('Login/index');
    }
    public function myTest()
    {
        $this->load->view('myTest');
    }
    public function forget_password()
    {
        $this->load->view('user/forget');
    }
  public function forget_password_insert()
{

    $qry=$this->m->check_user();
    if(empty($qry)){
	    	$this->session->set_flashdata('msg', '<div class="alert alert-danger text-center">Wrong Email-ID or Username!</div>');

				redirect('Login/forget_password'); 
	     }
	     else{
	         foreach($qry as $row){
	             $name=$row->first_name;
	               $lastname=$row->last_name;
	         }
	          $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
                $pass = array(); //remember to declare $pass as an array
                $alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
                for ($i = 0; $i < 8; $i++) {
                    $n = rand(0, $alphaLength);
                    $pass[] = $alphabet[$n];
                }
                $q=implode($pass);
                  $check=$this->m->forget_pass($q);
                  
                  if($check){
                      $email=$this->input->post('email');
                      @mail($email,'Password Recovery',"Hi $name $lastname Your new password is : $q");
     	$this->session->set_flashdata('msg', '<div class="alert alert-success text-center">Password has been sent to your Email</div>');

				redirect('Login/index');
                  }
                  
	     }
    
    
}
    public function sendPassword()
    {
       
       $res=$this->m->sendPassword();
      if($res)
      {
          foreach($res AS $row)
          {
              $full_name=$row->full_name;
              $user_name=$row->user_name;
              $password=$row->password;
              $user_email=$row->email;
              print_r($user_name);
          }
          /*
             $from='mobilebase.com';
             $subject='Forgott Username Or Password';
            $message="
                    <p>
                    Hello Dear<h3 style:color:blue><b>full_name</b></h3>  your user name <b>
                    $user_name</b> and your password is <h4>$password</h4> </p>
                        <h2><a href='www.alliedtajar.com/admin'> Click here to log in to access your accont</a></h2>
				
				<h3> Thank You for order www.alliedtajar.com</h3>
                 ";
                mail($user_email,$subject,$message,$from);*/
$this->email->from('email@example.com', 'Identification');
$this->email->to('salmanrazabwn@gmail.com');
$this->email->subject('Send Email Codeigniter');
$this->email->message('The email send using codeigniter library');
          
      }
        else
        {
            echo "OK Boss";
        }
        
    }
}
