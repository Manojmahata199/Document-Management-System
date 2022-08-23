<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 * 
	 * 
	 */



	public function __construct()
    {
            parent::__construct();


            $this->load->helper('url');
            // $this->load->helper('session');
            $this->load->model('Main_model');
	        $this->load->helper('url_helper');
	        $this->load->helper('form');
	        $this->load->library('form_validation');
	        $this->load->library('session');
	        // if($this->session->userdata('id')==""){
	        // 	 $this->load->view('index');
	        // }
	        $timezone=date_default_timezone_set("Asia/Calcutta");
	        
		    // $sec = "10";
		    // redirect('Welcome/main', 'refresh:20');
		    // header("Refresh:30;url=".base_url()."welcome/main");






    }
    public function signup(){
   
		$this->load->view('signup');
		




    }
    public function register(){

    	$this->form_validation->set_rules('user_name', 'User_name', 'required',array('required'=>'Your Name Is Required'));
		$this->form_validation->set_rules('user_email', 'User_email', 'required|valid_email',array('required'=>'Your Email is Required'));
		$this->form_validation->set_rules('user_mobile', 'User_mobile', 'required|numeric|exact_length[10]',array('required'=>'Your Mobile Number is Required'));
		$this->form_validation->set_rules('user_id', 'User_id', 'required',array('required'=>'Your id is Required'));
		$this->form_validation->set_rules('user_dob', 'User_dob', 'required',array('required'=>'Your Date of Birth is Required'));
		$this->form_validation->set_rules('user_company', 'User_company', 'required',array('required'=>'Your Company Name Is Required'));
		$this->form_validation->set_rules('user_department', 'User_department', 'required',array('required'=>'Your Department is Required'));
		$this->form_validation->set_rules('user_designation', 'User_designation', 'required',array('required'=>'Your Designation is Required'));
		$this->form_validation->set_rules('user_password', 'user_password', 'required',array('required'=>'Your Password is Required'));
		$this->form_validation->set_rules('user_address', 'User_address', 'required',array('required'=>'Your Address Is Required'));
		$this->form_validation->run();


		if ($this->form_validation->run()==false) {
			$this->session->set_flashdata('error_msg','Please Enter Valid Data');

			$this->session->set_flashdata('errors', validation_errors());

			$this->load->view('signup');
		}
		else{

		    if($_POST['submit']){

		    	$name=$_POST['user_name'];
		    	$email=$_POST['user_email'];
		    	$mobile=$_POST['user_mobile'];
		    	$id=$_POST['user_id'];
		    	$dob=$_POST['user_dob'];
		    	$company=$_POST['user_company'];
		    	$department=$_POST['user_department'];
		    	$designation=$_POST['user_designation'];
		    	$user_password=$_POST['user_password'];
		    	$address=$_POST['user_address'];


		    	$date=array();
		    	$data=array(

		    		"user_name"=>"$name",
		    		"user_email"=>"$email",
		    		"user_mobile"=>"$mobile",
		    		"user_id"=>"$id",
		    		"date_of_birth"=>"$dob",
		    		"company_name"=>"$company",
		    		"department"=>"$department",
		    		"designation"=>"$designation",
		    		"password"=>"$user_password",
		    		"address"=>"$address"
		    	);
		    	$this->Main_model->refister_user($data);
		    	
		    	$this->session->set_flashdata('success_msg','You Register Succesfully,Login Now');

		    	redirect('Welcome/index', 'refresh');


		    }

		}
    }



	public function index()
	{
		
				
	
             $this->load->view('index');
         
       
		
	}
	
	public function main(){
		if($this->session->userdata('id')!=""){

		
			$data_dept['result']=$this->Main_model->department_list_view();
			$data_dept['result_user']=$this->Main_model->list_view_dashboard();
			$data_dept['result_user_num']=$this->Main_model->user_no();
			$data_dept['doc_num']=$this->Main_model->get_num_row();
			$data_dept['link_num']=$this->Main_model->get_link_num_row();
			
		    $this->load->view('header');
			$this->load->view('sidebar');
			$this->load->view('main',$data_dept);
			$this->load->view('footer');
		}else{
            $this->load->view('index');

		}
		



	}
	public function search_list(){

		if(isset($_POST['search_submit'])){

			$search=$_POST['search_input'];
		    $login_id=$this->session->userdata('id');
		    $emp_type=$this->session->userdata('emp_type');
		    

		    $search_data['result']=$this->Main_model->search_list($search);

      
		    	$this->load->view('header');
				$this->load->view('sidebar');
				$this->load->view('search_list',$search_data);
				$this->load->view('footer');


		   
		   

		}
	}

	public function  search_link_list(){

		$search=$_POST['search_input'];
	    $login_id=$this->session->userdata('id');
	    $emp_type=$this->session->userdata('emp_type');
	    

	    $search_data['result']=$this->Main_model->search_link_list($search);

      //       echo "<pre>";                
	    	// print_r($search_data);
      //       echo "</pre>";
      //       die();
	    	$this->load->view('header');
			$this->load->view('sidebar');
			$this->load->view('search_link_list',$search_data);
			$this->load->view('footer');





	}
	public function logout(){


	   $this->session->sess_destroy();

       $this->load->view('index');



	}
	public function login(){



		$this->form_validation->set_rules('user_email', 'User_email', 'required|valid_email',array('required'=>'Your Email is Required'));
		$this->form_validation->set_rules('user_password', 'User_password', 'required',array('required'=>'Your Password Is Required'));
		$this->form_validation->run();



		if($this->form_validation->run()==false) {

			$this->session->set_flashdata('errors', validation_errors());
			$this->session->set_flashdata('error_msg','Please Enter Valid Data');

			
			$this->load->view('index');
			
			
		}
		else{

		    if($_POST['submit']){

		    	$email=$_POST['user_email'];
		    	$password=$_POST['user_password'];
		    	

		    	$date=array();
		    	$data=array(

		    		"user_email"=>"$email",
		    		"password"=>"$password"
		    		
		    	);

		    	$res=$this->Main_model->login_op($data);

		    	
               

		    	

		    	if($res!=""){

		    	

		    		$this->session->set_userdata('id',$res->id);
			        $this->session->set_userdata('user_email',$res->user_email);
			        $this->session->set_userdata('user_name',$res->user_name);
			        $this->session->set_userdata('emp_id',$res->user_id);
			        $this->session->set_userdata('user_mobile',$res->user_mobile);
			        $this->session->set_userdata('user_department',$res->department);
			        $this->session->set_userdata('emp_designation',$res->designation);
			        $this->session->set_userdata('user_address',$res->address);
			        $this->session->set_userdata('user_dob',$res->date_of_birth);
			         $this->session->set_userdata('emp_type',$res->emp_type);
			        $this->session->set_userdata('company_name',$res->company_name);
			        $this->session->set_userdata('password',$res->password);
			        $this->session->set_userdata('profile_img',$res->profile_img);


			        if(!file_exists('document_uploads/'.$this->session->userdata('id').'/')){


			        	$d=mkdir('document_uploads/'.$this->session->userdata('id').'/'.$doc_tittle.'/', 0777, true);
			        	$this->session->set_flashdata('success_msg','You Login Succesfully');

			    	    redirect('Welcome/main', 'refresh');

			        }
			        else{

			        	$this->session->set_flashdata('success_msg','You Login Succesfully');

			    	    redirect('Welcome/main', 'refresh');
			        }
		    				    

			    	
			    }else{

			    	$this->session->set_flashdata('error_msg','Please Enter Valid Login Id');

			    	redirect('Welcome/index', 'refresh');



			    }


		    }

		}



	}



	public function create(){


		$this->form_validation->set_rules('user_name', 'User_name', 'required',array('required'=>'Your Name Is Required'));
		$this->form_validation->set_rules('user_email', 'User_email', 'required|valid_email',array('required'=>'Your Email is Required'));
		$this->form_validation->set_rules('user_mobile', 'User_mobile', 'required|numeric|exact_length[10]',array('required'=>'Your Mobile Number is Required'));
		$this->form_validation->set_rules('user_id', 'User_id', 'required',array('required'=>'Your id is Required'));
		$this->form_validation->set_rules('user_dob', 'User_dob', 'required',array('required'=>'Your Date of Birth is Required'));
		$this->form_validation->set_rules('user_company', 'User_company', 'required',array('required'=>'Your Company Name Is Required'));
		$this->form_validation->set_rules('user_department', 'User_department', 'required',array('required'=>'Your Department is Required'));
		$this->form_validation->set_rules('user_designation', 'User_designation', 'required',array('required'=>'Your Designation is Required'));
		$this->form_validation->set_rules('user_address', 'User_address', 'required',array('required'=>'Your Address Is Required'));
		$this->form_validation->run();


		if ($this->form_validation->run()==false) {

			$this->session->set_flashdata('errors', validation_errors());

			$this->load->view('header');
			$this->load->view('sidebar');
			$this->load->view('create');
			$this->load->view('footer');
			
		}
		else{

		    if($_POST['submit']){

		    	$name=$_POST['user_name'];
		    	$email=$_POST['user_email'];
		    	$mobile=$_POST['user_mobile'];
		    	$id=$_POST['user_id'];
		    	$dob=$_POST['user_dob'];
		    	$company=$_POST['user_company'];
		    	$department=$_POST['user_department'];
		    	$designation=$_POST['user_designation'];
		    	$address=$_POST['user_address'];

		    	$date=array();
		    	$data=array(

		    		"user_name"=>"$name",
		    		"user_email"=>"$email",
		    		"user_mobile"=>"$mobile",
		    		"user_id"=>"$id",
		    		"date_of_birth"=>"$dob",
		    		"company_name"=>"$company",
		    		"department"=>"$department",
		    		"designation"=>"$designation",
		    		"address"=>"$address"
		    	);
		    	$this->Main_model->create_user($data);
		    	
		    	$this->session->set_flashdata('success_msg','The User added Succesfully');

		    	redirect('Welcome/list', 'refresh');


		    }

		}

	}
	public function list(){

		$data['result']=$this->Main_model->list_view();
		
		

		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('userlist',$data);
		$this->load->view('footer');




	}
	public function application_list(){


		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('application_list');
		$this->load->view('footer');




	}
	public function delete_row($user_id) {


	    
	    // $data=$this->Main_model->delete_row($user_id);
	    // if($data==true){

	    	$this->session->set_flashdata('error_msg','You Can Not Delete Any User');

	    	redirect('Welcome/list', 'refresh');
	    // }
	    // else{
	    // 	$this->session->set_flashdata('success_msg','The User Not Deleted');

	    // 	redirect('Welcome/list', 'refresh');

	    // }
    }
    public function edit_view($user_id){

    	$data['result']=$this->Main_model->edit_view($user_id);



    	$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('edit_form',$data);
		$this->load->view('footer');





    }
    public function update_user(){

    	$this->form_validation->set_rules('user_name', 'User_name', 'required',array('required'=>'Your Name Is Required'));
		$this->form_validation->set_rules('user_email', 'User_email', 'required|valid_email',array('required'=>'Your Email is Required'));
		$this->form_validation->set_rules('user_mobile', 'User_mobile', 'required|numeric|exact_length[10]',array('required'=>'Your Mobile Number is Required'));
		$this->form_validation->set_rules('user_id', 'User_id', 'required',array('required'=>'Your id is Required'));
		$this->form_validation->set_rules('user_dob', 'User_dob', 'required',array('required'=>'Your Date of Birth is Required'));
		$this->form_validation->set_rules('emp_type', 'Emp_type', 'required',array('required'=>'Select The Employee Type'));
		$this->form_validation->set_rules('user_company', 'User_company', 'required',array('required'=>'Your Company Name Is Required'));
		$this->form_validation->set_rules('user_department', 'User_department', 'required',array('required'=>'Your Department is Required'));
		$this->form_validation->set_rules('user_designation', 'User_designation', 'required',array('required'=>'Your Designation is Required'));
		$this->form_validation->set_rules('user_address', 'User_address', 'required',array('required'=>'Your Address Is Required'));
		$this->form_validation->run();


		if ($this->form_validation->run()==false) {

			$id=$_POST['id'];

			$this->session->set_flashdata('warning_msg','Please Enter Valid Data');

			redirect('Welcome/edit_view/'.$id.'', 'refresh');
			
		}
		else{

			if($_POST['submit']){

				$id=$_POST['id'];
		    	$name=$_POST['user_name'];
		    	$email=$_POST['user_email'];
		    	$mobile=$_POST['user_mobile'];
		    	$emp_id=$_POST['user_id'];
		    	$dob=$_POST['user_dob'];
		    	$emp_type=$_POST['emp_type'];
		    	$company=$_POST['user_company'];
		    	$department=$_POST['user_department'];
		    	$designation=$_POST['user_designation'];
		    	$address=$_POST['user_address'];


		    	$date=array();
		    	$data=array(

		    		"id"=>"$id",
		    		"user_name"=>"$name",
		    		"user_email"=>"$email",
		    		"user_mobile"=>"$mobile",
		    		"user_id"=>"$emp_id",
		    		"date_of_birth"=>"$dob",
		    		"company_name"=>"$company",
		    		"department"=>"$department",
		    		"designation"=>"$designation",
		    		"emp_type"=>"$emp_type",
		    		"address"=>"$address"
		    	);
		    	$res=$this->Main_model->update_user($data);

		    	if($res==true){

			    	$this->session->set_flashdata('success_msg','The User Updated Succesfully');

			    	redirect('Welcome/list', 'refresh');
			    }else{
			    	$this->session->set_flashdata('success_msg','The User Not Updated');

			    	redirect('Welcome/edit_view/'.$id.'', 'refresh');



			    }
		    }
		}






    }
    public function department_list(){


    	$data['result']=$this->Main_model->department_list_view_option();
		
		

		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('department_list',$data);
		$this->load->view('footer');





    }
    public function add_department(){

        $this->form_validation->set_rules('dept_name', 'dept_name', 'required',array('required'=>'Your Department Name Is Required'));
        $this->form_validation->run();



		if ($this->form_validation->run()==false) {


			$this->session->set_flashdata('warning_msg','Please Enter Valid Department');

			$this->load->view('header');
			$this->load->view('sidebar');
			$this->load->view('department_list');
			$this->load->view('footer');
			
		}
		else{

			if($_POST['submit']){

				
		    	$dept_name=$_POST['dept_name'];
		    	

		    	$date=array();
		    	$data=array(

		    		
		    		"dept_name"=>"$dept_name"
		    		
		    	);
		    	$res=$this->Main_model->add_department($data);
		    	if($res==true){

			    	$this->session->set_flashdata('success_msg','The Department Added Succesfully');

			    	redirect('Welcome/department_list', 'refresh');
			    }else{
			    	$this->session->set_flashdata('success_msg','The Department Not Added');

			    	redirect('Welcome/department_list', 'refresh');



			    }
			}
		}


    }
    public function delete_dept_row($user_id){

    	$data=$this->Main_model->delete_dept_row($user_id);
	    if($data==true){

	    	$this->session->set_flashdata('success_msg','The Department Deleted Succesfully');

	    	redirect('Welcome/department_list', 'refresh');
	    }
	    else{
	    	$this->session->set_flashdata('success_msg','The Department Not Deleted');

	    	redirect('Welcome/department_list', 'refresh');

	    }





    }
    public function designation_list(){



    	$data['result']=$this->Main_model->designation_list_view();
		
		

		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('designation_list',$data);
		$this->load->view('footer');
    }
    public function add_designation(){

        $this->form_validation->set_rules('designation_name', 'designation_name', 'required',array('required'=>'Your Designation Name Is Required'));
        $this->form_validation->run();



		if ($this->form_validation->run()==false) {


			$this->session->set_flashdata('warning_msg','Please Enter Valid Designation');

			$this->load->view('header');
			$this->load->view('sidebar');
			$this->load->view('designation_list');
			$this->load->view('footer');
			
		}
		else{

			if($_POST['submit']){

				
		    	$designation_name=$_POST['designation_name'];
		    	

		    	$date=array();
		    	$data=array(

		    		
		    		"designation_name"=>"$designation_name"
		    		
		    	);
		    	$res=$this->Main_model->add_designation($data);
		    	if($res==true){

			    	$this->session->set_flashdata('success_msg','The Designation Added Succesfully');

			    	redirect('Welcome/designation_list', 'refresh');
			    }else{
			    	$this->session->set_flashdata('success_msg','The Designation Not Added');

			    	redirect('Welcome/designation_list', 'refresh');



			    }
			}
		}


    }
    public function delete_designation_row($user_id){
    	$data=$this->Main_model->delete_designation_row($user_id);
	    if($data==true){

	    	$this->session->set_flashdata('success_msg','The Designation Deleted Succesfully');

	    	redirect('Welcome/designation_list', 'refresh');
	    }
	    else{
	    	$this->session->set_flashdata('success_msg','The Designation Not Deleted');

	    	redirect('Welcome/designation_list', 'refresh');

	    }



    }
    public function profile_page(){

    	    $this->load->view('header');
			$this->load->view('sidebar');
			$this->load->view('profile');
			$this->load->view('footer');

    }
    public function upload_picture(){

    	    $this->load->view('header');
			$this->load->view('sidebar');
			$this->load->view('upload_picture');
			$this->load->view('footer');



    }
    public function profile_img_upload(){

    	if($_POST['submit']){

    		$id=$_POST['user_id'];
		    $img=$_FILES['profile_img'];

		     $img_name=$img['name'];
		     $img_path=$img['tmp_name'];

		     $new_path="uploads/".$img_name."";


		     $date=array();
		    	$data=array(

		    		"profile_img"=>"$img_name"
		    		
		    	);

		    


		    $m=move_uploaded_file($img_path, $new_path);
		   
		   if($m==1){

			   	 $res=$this->Main_model->profile_img_upload($data,$id);
			   	 if($res==true){
			   	 	$this->session->set_flashdata('success_msg','Profile Picture Uploaded Successfully,Login Again');

		    	    redirect('Welcome/index', 'refresh');



			   	 }
			   	 else{
			   	 	$this->session->set_flashdata('error_msg','The File Not Uploaded');

		    	    redirect('Welcome/upload_picture', 'refresh');


			   	 }



		    }else{

		    	$this->session->set_flashdata('error_msg','The File Not Uploaded');

	    	    redirect('Welcome/upload_picture', 'refresh');


		   }

    	}
    }
    public function profile_setting($user_id){

    	$data['result']=$this->Main_model->edit_view($user_id);
    	$data['dept']=$this->Main_model->department_list_view_option();
    	$data['desig']=$this->Main_model->designation_list_view();



    	$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('profile_setting',$data);
		$this->load->view('footer');




    }
    public function profile_set(){



    	$this->form_validation->set_rules('user_name', 'User_name', 'required',array('required'=>'Your Name Is Required'));
		$this->form_validation->set_rules('user_email', 'User_email', 'required|valid_email',array('required'=>'Your Email is Required'));
		$this->form_validation->set_rules('user_mobile', 'User_mobile', 'required|numeric|exact_length[10]',array('required'=>'Your Mobile Number is Required'));
		$this->form_validation->set_rules('user_id', 'User_id', 'required',array('required'=>'Your id is Required'));
		$this->form_validation->set_rules('user_dob', 'User_dob', 'required',array('required'=>'Your Date of Birth is Required'));
		$this->form_validation->set_rules('user_company', 'user_company', 'required',array('required'=>'Your Company Name Is Required'));
		$this->form_validation->set_rules('user_department', 'user_department', 'required',array('required'=>'Your Department is Required'));
		$this->form_validation->set_rules('user_designation', 'user_designation', 'required',array('required'=>'Your Designation is Required'));
		$this->form_validation->set_rules('user_password', 'user_password', 'required',array('required'=>'Your Password is Required'));
		$this->form_validation->set_rules('user_address', 'User_address', 'required',array('required'=>'Your Address Is Required'));
		$this->form_validation->run();


		if ($this->form_validation->run()==false) {

			$id=$_POST['id'];

			$this->session->set_flashdata('warning_msg','Please Enter Valid Data');

			redirect('Welcome/profile_setting/'.$id.'', 'refresh');
			
		}
		else{

			if($_POST['submit']){

				$id=$_POST['id'];
		    	$name=$_POST['user_name'];
		    	$email=$_POST['user_email'];
		    	$mobile=$_POST['user_mobile'];
		    	$emp_id=$_POST['user_id'];
		    	$dob=$_POST['user_dob'];
		    	$company=$_POST['user_company'];
		    	$department=$_POST['user_department'];
		    	$designation=$_POST['user_designation'];
		    	$user_password=$_POST['user_password'];
		    	$address=$_POST['user_address'];


		    	$date=array();
		    	$data=array(

		    		"id"=>"$id",
		    		"user_name"=>"$name",
		    		"user_email"=>"$email",
		    		"user_mobile"=>"$mobile",
		    		"user_id"=>"$emp_id",
		    		"date_of_birth"=>"$dob",
		    		"company_name"=>"$company",
		    		"department"=>"$department",
		    		"designation"=>"$designation",
		    		"password"=>"$user_password",
		    		"address"=>"$address"
		    	);
		    	$res=$this->Main_model->update_user($data);

		    	if($res==true){

			    	$this->session->set_flashdata('success_msg','The User Updated Succesfully,Login Again');

			    	redirect('Welcome/index', 'refresh');
			    }else{
			    	$this->session->set_flashdata('success_msg','The User Not Updated');

			    	redirect('Welcome/profile_setting/'.$id.'', 'refresh');



			    }
		    }
		}
    }
    public function edit_dept_view($id){
    	$data['result']=$this->Main_model->edit_dept_view($id);



    	$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('update_department',$data);
		$this->load->view('footer');





    }


    public function edit_designation_view($id){
    	$data['result']=$this->Main_model->edit_desig_view($id);



    	$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('update_designation',$data);
		$this->load->view('footer');



    }
    public function update_designation(){

    	$this->form_validation->set_rules('designation_name', 'designation_name', 'required',array('required'=>'Your Designation Name Is Required'));
        $this->form_validation->run();



		if ($this->form_validation->run()==false) {


			$this->session->set_flashdata('warning_msg','Please Enter Valid Designation');

			$this->load->view('header');
			$this->load->view('sidebar');
			$this->load->view('update_designation');
			$this->load->view('footer');
			
		}
		else{

			if($_POST['submit']){
				$id=$_POST['id'];

				
		    	$designation_name=$_POST['designation_name'];
		    	

		    	$date=array();
		    	$data=array(

		    		
		    		"designation_name"=>"$designation_name"
		    		
		    	);
		    	$res=$this->Main_model->update_designation($data,$id);
		    	if($res==true){

			    	$this->session->set_flashdata('success_msg','The Designation Updated Succesfully');

			    	redirect('Welcome/designation_list', 'refresh');
			    }else{
			    	$this->session->set_flashdata('success_msg','The Designation Not Updated');

			    	redirect('Welcome/designation_list', 'refresh');



			    }
			}
		}


    }
    public function update_department(){

    	 $this->form_validation->set_rules('dept_name', 'dept_name', 'required',array('required'=>'Your Department Name Is Required'));
        $this->form_validation->run();



		if ($this->form_validation->run()==false) {


			$this->session->set_flashdata('warning_msg','Please Enter Valid Department');

			$this->load->view('header');
			$this->load->view('sidebar');
			$this->load->view('update_department');
			$this->load->view('footer');
			
		}
		else{

			if($_POST['submit']){
				$id=$_POST['id'];

				
		    	$dept_name=$_POST['dept_name'];
		    	

		    	$date=array();
		    	$data=array(

		    		
		    		"dept_name"=>"$dept_name"
		    		
		    	);
		    	$res=$this->Main_model->update_department($data,$id);
		    	if($res==true){

			    	$this->session->set_flashdata('success_msg','The Department Updated Succesfully');

			    	redirect('Welcome/department_list', 'refresh');
			    }else{
			    	$this->session->set_flashdata('success_msg','The Department Not Updated');

			    	redirect('Welcome/department_list', 'refresh');



			    }
			}
		}
    }
    public function upload_document(){

    	$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('upload_document');
		$this->load->view('footer');


    }
   
    public function upload_document_operation(){

    	$this->form_validation->set_rules('doc_tittle', 'doc_tittle', 'required',array('required'=>'Document Tittle Is Required'));
		// $this->form_validation->set_rules('doc_file', 'Document', 'required',array('required'=>'Document File is Required'));
		$this->form_validation->set_rules('doc_type', 'doc_type', 'required',array('required'=>'Document Type is Required'));
		$this->form_validation->set_rules('doc_upload_date', 'doc_upload_date', 'required',array('required'=>'Document Upload Date Required'));
		$this->form_validation->set_rules('doc_details', 'doc_details', 'required',array('required'=>'Document Details is Required'));
		
		$this->form_validation->run();


		if ($this->form_validation->run()==false) {

			$this->session->set_flashdata('errors', validation_errors());

			

			$this->session->set_flashdata('error_msg','Please Enter Valid Data');

			$this->load->view('header');
			$this->load->view('sidebar');
			$this->load->view('upload_document');
			$this->load->view('footer');
			
		}
		else{

			if($_POST['submit']){

				  $row=$this->Main_model->get_num_row();
				  $row++;
				  $regId=$row;
				  $regId=str_pad($regId,7,"0",STR_PAD_LEFT);

				  $document_id="D-".$regId;
				
				// $registration_id=getRegistrationId();
               
				$doc_upload_by_id=$_POST['doc_upload_by_id'];
		    	$doc_upload_by__name=$_POST['doc_upload_by__name'];		    	
		    	$doc_upload_by_emp_id=$_POST['doc_upload_by_emp_id'];		    	
		    	$doc_upload_by_company=$_POST['doc_upload_by_company'];
		    	$doc_upload_by_department=$_POST['doc_upload_by_department'];
		    	$doc_upload_by_designation=$_POST['doc_upload_by_designation'];
		    	$doc_tittle=$_POST['doc_tittle']; 
		    	$doc_type=$_POST['doc_type'];
		        $doc_upload_date=$_POST['doc_upload_date'];
		        $doc_details=$_POST['doc_details'];
    		    $doc_file_name=$_FILES['doc_file']['name'];
		    	$doc_file_path=$_FILES['doc_file']['tmp_name'];
		    	


		    	   if($_FILES['doc_file'])
					{
							if(!file_exists('document_uploads/'.$this->session->userdata('id').'/'.$doc_tittle.'/'))
							{
								
				    			$uploadOk = 1;
				    		    
							}
							else{

								$uploadOk = 0;
							}
						
							


							


                              $target_dir = 'document_uploads/'.$this->session->userdata('id').'/'.$doc_tittle.'/';
							  $target_file = $target_dir.$_FILES["doc_file"]["name"];


							  $extension = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
                              $new_path='document_uploads/'.$this->session->userdata('id').'/'.$doc_tittle.'/'.$doc_file_name.'';


                            $date=array();
					    	$data=array(

					    		"upload_by_id"=>"$doc_upload_by_id",
					    		"doc_upload_by_name"=>"$doc_upload_by__name",
					    		"upload_by_emp_id"=>"$doc_upload_by_emp_id",
					    		"upload_by_company"=>"$doc_upload_by_company",
					    		"upload_by_department"=>"$doc_upload_by_department",
					    		"upload_by_designation"=>"$doc_upload_by_designation",

					    		"d_title_name"=>"$doc_tittle",
					    		"d_type"=>"$doc_type",
					    		"d_upload_date"=>"$doc_upload_date",
					    		"d_details"=>"$doc_details",

					    		"doc_upload_name"=>"$doc_file_name",
					    		"d_extension"=>"$extension",
					    		"document_id"=>"$document_id"

					    	);

                            
                         
							
							if($uploadOk ==1)
							{
								$d=mkdir('document_uploads/'.$this->session->userdata('id').'/'.$doc_tittle.'/', 0777, true);								
						 	    $m=move_uploaded_file($doc_file_path, $new_path);
						 	    $res=$this->Main_model->upload_document_operation($data);

							 	if($m==1 && $res==true && $d==true){

							    								    
							    	$this->session->set_flashdata('success_msg','The Document Created Succesfully');

							    	redirect('Welcome/document_list', 'refresh');
								    
								}
								else{
									$this->session->set_flashdata('error_msg','The Document Not Created');

								    redirect('Welcome/upload_document/', 'refresh');
								}
							}
							else{
								$this->session->set_flashdata('error_msg','The Document File Allready Created,Please Upload in Another Name');

							      redirect('Welcome/upload_document/', 'refresh');

							}
							
					}
		    	
		    }
		}


    }
    public function document_list(){

    		if($this->session->userdata('id')!=""){
	    		if($this->session->userdata('emp_type')=="admin"){ 

	    			    $login_id=$this->session->userdata('id');	    			   
						$dept_list['result']=$this->Main_model->document_list();
							
										
						    $this->load->view('header');
							$this->load->view('sidebar');
							$this->load->view('document_list',$dept_list);
							$this->load->view('footer');
						
				}else{
						    $login_id=$this->session->userdata('id');												
							$dept_list['result']=$this->Main_model->document_list_for_user($login_id);
							
										
						    $this->load->view('header');
							$this->load->view('sidebar');
							$this->load->view('document_list',$dept_list);
							$this->load->view('footer');
						

				}
			}
			else{
				redirect('Welcome/index', 'refresh');
			}
    	


    }
    public function document_view($id){




        

        if($this->session->userdata('emp_type')!="admin"){  

	        $doc['result']=$this->Main_model->document_list_by_id($id);
	        $upload_byid=$doc['result']->upload_by_id;   
	        if($this->session->userdata('id')==$upload_byid){


		    	$this->load->view('header');
				$this->load->view('sidebar');
				$this->load->view('document_view',$doc);
				$this->load->view('footer');
			}else{
				redirect('Welcome/document_list', 'refresh');

			}
		}else{

               $doc['result']=$this->Main_model->document_list_by_id($id);
             
                $this->load->view('header');
				$this->load->view('sidebar');
				$this->load->view('document_view',$doc);
				$this->load->view('footer');




		}




    }
    public function download($id){
    	    $this->load->helper('download');
    	    $doc=$this->Main_model->document_list_by_id($id);

    	    


			 // $file = $this->uploadmodel->getById($file_id); //getting all the file details
                                                      //for $file_id (all details are stored in DB)
	        $file_name =$doc->doc_upload_name; // Read the file's contents
	        $folder = $doc->d_title_name;
	        $uploaded_by_id=$doc->upload_by_id;
	        $path=base_url().'document_uploads/'.$uploaded_by_id.'/'.$folder.'/'.$file_name.'';
	        // $data = file_get_contents($path);

	         

	        force_download('document_uploads/'.$uploaded_by_id.'/'.$folder.'/'.$file_name.'',null);

			
    }
    public function get_department(){
    	$data=$this->Main_model->department_dropdown_list();   	
          echo json_encode($data);
          
    }
    public function get_designation(){
    	$data=$this->Main_model->designation_dropdown_list();
    	echo json_encode($data);
    }
    public function upload_link_view(){

       $this->load->view('header');
	   $this->load->view('sidebar');
       $this->load->view('upload_link');
       $this->load->view('footer');

    }
    public function upload_link_operation(){

    	$this->form_validation->set_rules('doc_tittle', 'doc_tittle', 'required',array('required'=>'Document Tittle Is Required'));
		$this->form_validation->set_rules('doc_link', 'doc_link', 'required',array('required'=>'Document Link is Required'));
		
		$this->form_validation->set_rules('doc_upload_date', 'doc_upload_date', 'required',array('required'=>'Document Upload Date Required'));
		$this->form_validation->set_rules('doc_details', 'doc_details', 'required',array('required'=>'Document Details is Required'));
		
		$this->form_validation->run();


		if ($this->form_validation->run()==false) {

			$this->session->set_flashdata('errors', validation_errors());

			

			$this->session->set_flashdata('error_msg','Please Enter Valid Data');

			$this->load->view('header');
			$this->load->view('sidebar');
			$this->load->view('upload_link');
			$this->load->view('footer');
			
		}
		else{

			if($_POST['submit']){

				  $row=$this->Main_model->get_link_num_row();
				  $row++;
				  $regId=$row;
				  $regId=str_pad($regId,7,"0",STR_PAD_LEFT);

				  $link_id="L-".$regId;
				
				
               
				$doc_upload_by_id=$_POST['doc_upload_by_id'];
		    	$doc_upload_by__name=$_POST['doc_upload_by__name'];		    	
		    	$doc_upload_by_emp_id=$_POST['doc_upload_by_emp_id'];		    	
		    	$doc_upload_by_company=$_POST['doc_upload_by_company'];
		    	$doc_upload_by_department=$_POST['doc_upload_by_department'];
		    	$doc_upload_by_designation=$_POST['doc_upload_by_designation'];

		    	$doc_tittle=$_POST['doc_tittle']; 
		    	$doc_link=$_POST['doc_link'];
		        $doc_upload_date=$_POST['doc_upload_date'];
		        $doc_details=$_POST['doc_details'];
   		   
                    $date=array();
			    	$data=array(

			    		"link_upload_by_id"=>"$doc_upload_by_id",
			    		"link_upload_byname"=>"$doc_upload_by__name",
			    		"link_upload_by_emp_id"=>"$doc_upload_by_emp_id",
			    		"upload_by_company"=>"$doc_upload_by_company",
			    		"link_upload_by_dpartment"=>"$doc_upload_by_department",
			    		"link_upload_by_designation"=>"$doc_upload_by_designation",

			    		"link_title"=>"$doc_tittle",
			    		"link"=>"$doc_link",					    	
			    		"doc_date"=>"$doc_upload_date",
			    		"link_details"=>"$doc_details",
			    		"link_id"=>"$link_id"

			    	
			    	);
                    $res=$this->Main_model->upload_link_operation($data);                                              
					
					if($res ==true)
					{
						
				 	  								    
				    	$this->session->set_flashdata('success_msg','The Document Created Succesfully');

				    	redirect('Welcome/link_list', 'refresh');
					    
					}
					else{
						$this->session->set_flashdata('error_msg','The Document Not Created');

					    redirect('Welcome/upload_link_view/', 'refresh');
					}
							
							
			}
		    	
		    
		}


    }
     public function link_list(){
    	
    	if($this->session->userdata('id')!=""){ 
    		if($this->session->userdata('emp_type')=="admin"){ 
 			   
			$link_list['result']=$this->Main_model->link_list();
							
			    $this->load->view('header');
				$this->load->view('sidebar');
				$this->load->view('link_list',$link_list);
				$this->load->view('footer');
		    }else{
		    	$user_id=$this->session->userdata('id');
		    	$link_list['result']=$this->Main_model->user_link_list($user_id);
							
			    $this->load->view('header');
				$this->load->view('sidebar');
				$this->load->view('link_list',$link_list);
				$this->load->view('footer');





			}	
		}
		else{
			redirect('Welcome/index', 'refresh');
		}
	


    }
    public function link_view($id){

    	if($this->session->userdata('id')!=""){  

            $doc['result']=$this->Main_model->link_view($id);
           
      
	    	$this->load->view('header');
			$this->load->view('sidebar');
			$this->load->view('link_view',$doc);
			$this->load->view('footer');
		}else{
			redirect('Welcome/link_list', 'refresh');

		}
		
    }

    public function download_link($id) {
		    // load download helder
		    $this->load->helper('download');
		    $doc=$this->Main_model->link_view($id);

		     $file_name =$doc->link_title; // Read the file's contents
	         $file_link= $doc->link;



		    // read file contents
		    $data_link = file_get_contents($file_link);
		    force_download($file_name, $data_link);
		     // force_download('$file_link' ,null);
    }

    //          $this->load->helper('download');
    	    

    	    


			 // // $file = $this->uploadmodel->getById($file_id); //getting all the file details
    //                                                   //for $file_id (all details are stored in DB)
	   //      $file_name =$doc->doc_upload_name; // Read the file's contents
	   //      $folder = $doc->d_title_name;
	   //      $path=base_url().'document_uploads/'.$folder.'/'.$file_name.'';
	   //      // $data = file_get_contents($path);

	         

	   //     
   
}
