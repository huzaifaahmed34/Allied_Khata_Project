<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Signup_model extends CI_Model{


public function insert_user(){

$data1=array(
	
             
                'email'=>$this->input->post('email'),
               'company_name'=>$this->input->post('b_name'),
               'address'=>$this->input->post('address'),
                      'phone'=>$this->input->post('mobile'),
                       'city'=>$this->input->post('city'),
                        
);
$this->db->insert('company_details',$data1);

$this->db->select_max('id');
     $last_row= $this->db->get('company_details')->result();
 foreach ($last_row as $r) {
    $v=$r->id; 
}     
$data=array(
	'company_id'=>$v,
	'first_name'=>$this->input->post('u_name'),
          'contact'=>$this->input->post('mobile'),
             'address'=>$this->input->post('address'),
                'email'=>$this->input->post('email'),
                'password'=>$this->input->post('pass'),
                 'user_type'=>'user',
                   'username'=>$this->input->post('user_name'),
                     'last_name'=>$this->input->post('last_name'),
                       'status'=>'Pending',
);

	$this->db->insert('user',$data);

            







    }

public function get_user(){


     $last_row= $this->db->query('select * from user order by id  DESC limit 1')->result();
     return $last_row;
 

}

}
?>