<?php
class Designation_model extends CI_Model{

public function designationadd(){
        $date=date("Y-m-d");
        $data=array(
            'name'=> $this->input->post('designation1'),
          'company_id'=>$_SESSION['company_id'],
            'created_on'=>$date,
            'is_deleted'=>0,
        );
        $this->db->insert('designation',$data);
    }
    public function designationedit(){
        $id=$this->input->post('id');

        $this->db->where('id',$id);
        $qry=$this->db->get('designation');
        return $qry->result();
    }
        public function showdesignation(){
      $comp_id=$_SESSION['company_id'];

        $qry=$this->db->query("select * from designation where is_deleted=0 and company_id='$comp_id'");
        return $qry->result();
    }

    public function designationupdate(){
        $date=date("Y-m-d");
        $id=$this->input->post('id');
        $data=array(
            'name'=> $this->input->post('designation'),
            
            'updated_on'=>$date,
        );
        $this->db->where('id',$id);
    
        
        $this->db->update('designation',$data);
    }
    public function designationdelete(){
        $date=date("Y-m-d");
        $id=$this->input->post('id');
            $data=array(
            'deleted_on'=>$date,
            'is_deleted'=>1,
        );

        $this->db->where('id',$id);
        $qry=$this->db->update('designation',$data);
    
    }



}