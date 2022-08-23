<?php

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main_model extends CI_Model {




public function login_op($data){


	
	$user_email=$data['user_email'];
	$password=$data['password'];

	$arr=array();
	$arr=array("user_email"=>"$user_email","password"=>"$password");


	
	$this -> db -> where($arr);
	$data_res= $this-> db ->get('user_list');
	
   
   $data_res->num_rows();
    
   if($data_res->num_rows()>0){

   	return $data_res->row();
   }
   else{

   	return false;
   }

}
public function search_list($search){


            $this->db->select('*');
            $this->db->from('document_table');
            $this->db->or_like('d_title_name',$search,'both');
            $this->db->or_like('d_extension', $search,'both');
            $this->db->or_like('d_upload_date', $search,'both');
            $query= $this->db->get();
            return $query->result();


}

public function search_link_list($search){

            $this->db->select('*');
            $this->db->from('link_table');
            $this->db->or_like('link_title',$search,'both');
            $this->db->or_like('doc_date', $search,'both');
            $this->db->or_like('link_id', $search,'both');                    
            $query=$this->db->get();
   
            return $query->result();

}
public function get_num_row(){
    $data= $this-> db ->get('document_table'); 
    return $data->num_rows();  


}
public function get_link_num_row(){
   $data= $this-> db ->get('link_table'); 
    return $data->num_rows(); 


}

public function create_user($data){

	$this-> db ->insert('user_list',$data);
        return true;


}
public function refister_user($data){

  $this-> db ->insert('user_list',$data);
        return true;

}
public function list_view_dashboard(){
	$limit=5;
   $start=0;

    
   $data= $this-> db ->order_by("id", "DESC");
   $data= $this-> db ->limit($limit, $start);
   $data= $this-> db ->get('user_list');
   return $data->result();  

}
public function list_view(){
    
    
   $data= $this-> db ->order_by("id", "DESC");
  
   $data= $this-> db ->get('user_list');
   return $data->result();  

}
public function user_no(){
   $data= $this-> db ->get('user_list'); 
    return $data->num_rows();  


}
public function delete_row($id){


	 $this -> db -> where('id', $id);
    $this -> db -> delete('user_list');
    return true;


}
public function edit_view($id){

   $this -> db -> where('id', $id);
	$data= $this-> db ->get('user_list'); 
   return $data->row();


}
public function edit_dept_view($id){
	$this -> db -> where('id', $id);
	$data= $this-> db ->get('department_list'); 
   return $data->row();


}
public function edit_desig_view($id){
	$this -> db -> where('id', $id);
	$data= $this-> db ->get('designation_list'); 
   return $data->row();


}
public function update_user($data){
	// print_r($data);

	  $id=$data['id'];

	  $data=$this->db->set($data);
	  $data=$this->db->where('id',$id);
	  $data=$this->db->update('user_list');
       
     

     return true;

}
public function update_designation($data,$id){
	$this->db->set($data);
	  $this->db->where('id',$id);
	  $this->db->update('designation_list');

     return true;


}
public function update_department($data,$id){
	$this->db->set($data);
	  $this->db->where('id',$id);
	  $this->db->update('department_list');

     return true;


}
public function department_list_view(){

	$limit=5;
   $start=0;

    
    $data= $this-> db ->order_by("id", "DESC");
    $data= $this-> db ->limit($limit, $start);
    $data= $this-> db ->get('department_list'); 
    return $data->result(); 



}
public function department_list_view_option(){

       
    $data= $this-> db ->order_by("dept_name", "asc");
    $data= $this-> db ->get('department_list'); 
    return $data->result(); 



}
public function add_department($data){
	$this-> db ->insert('department_list',$data);
        return true;

}
public function delete_dept_row($id){

    $this -> db -> where('id', $id);
    $this -> db -> delete('department_list');
    return true;


}
public function designation_list_view(){

   $data= $this-> db ->get('designation_list'); 
    return $data->result(); 


}
public function add_designation($data){
	$this-> db ->insert('designation_list',$data);
        return true;

}
public function delete_designation_row($id){
     $this -> db -> where('id', $id);
    $this -> db -> delete('designation_list');
    return true;


}
public function profile_img_upload($data,$id){

	  $profile_img=$data['profile_img'];


	  $this->db->set($data);
	  $this->db->where('id',$id);
	  $this->db->update('user_list');

     return true;


}
public function upload_document_operation($data){

        $this-> db ->insert('document_table',$data);
        return true;


}
public function document_list(){

    $data= $this-> db ->get('document_table'); 
    return $data->result(); 


}

public function document_list_for_user($login_id){

     $this -> db -> where('upload_by_id', $login_id);
     $data= $this-> db ->get('document_table'); 
     return $data->result(); 



}
public function document_list_by_id($id){

	 $this -> db -> where('id', $id);
    $data= $this-> db ->get('document_table'); 
    return $data->row(); 


}
public function department_dropdown_list(){


    $data= $this-> db ->order_by("id", "asc");  
    $data= $this-> db ->get('department_list'); 
    return $data->result(); 



}
public function designation_dropdown_list(){


    $data= $this-> db ->order_by("id", "asc");  
    $data= $this-> db ->get('designation_list'); 
    return $data->result(); 



}

public function upload_link_operation($data){

        $this-> db ->insert('link_table',$data);
        return true;


}
public function link_list(){

   $data=$this-> db ->get('link_table');
   return $data->result();



}
public function user_link_list($id){


   $data=$this -> db -> where('link_upload_by_id', $id);
   $data= $this-> db ->order_by("id", "DESC");
   $data=$this-> db ->get('link_table');
   return $data->result();

}
public function link_view($id){

    $data=$this -> db -> where('id', $id);
    $data= $this-> db ->order_by("id", "DESC");  
    $data= $this-> db ->get('link_table'); 
    return $data->row(); 


}
public function document_link_by_id($id){

}




}
?>