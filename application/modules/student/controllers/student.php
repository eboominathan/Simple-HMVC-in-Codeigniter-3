<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Student extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('login/student_model');
		$this->load->helper('url');
		
		}	
	
	//Shows the dashboard
	public function index()
	{
		 if($this->session->userdata('is_logged_in'))
        {
                  
		$this->load->view('header');
		$this->load->view('student');
		$this->load->view('footer');
		}
		else{		
		redirect('home');
		}
	}
	//Insert the Student 
	public function  insert_student()
	{
		$interest=implode(',',$this->input->post('interest'));
		$data=array('name'=>$this->input->post('name'),
			'address'=>$this->input->post('address'),
			'year'=>$this->input->post('year'),
			'gender'=>$this->input->post('gender'),
			'interest'=>$interest,
			'status'=>1);
		
		
		$result=$this->student_model->insert_student($data);
		if($result==true)
		{
			$this->session->set_flashdata('msg',"Student Records Added Successfully");
			redirect('student');

		}
		else
		{

			$this->session->set_flashdata('msg1',"Student Records Added Failed");
			redirect('student');


		}
	}
	//List of students 
		public function list_students()
	{
		 if($this->session->userdata('is_logged_in'))
        {
          
        	$data['student']=$this->student_model->get_student();

        	$this->load->view('header',array('error' => ' ' ));
			$this->load->view('list_of_students',$data);
			 $this->load->view('footer');
		}
		else{		
		redirect('home');
		}
	}

	//Change the Status of student to hide fron the table 

	public function delete_student()
	{
		$id=$this->input->post('id');
		$data=array('status'=>0);
		$result=$this->student_model->delete_student($id,$data);
		if($result==true)
		{
			$this->session->set_flashdata('msg1',"Deleted Successfully");
			redirect('student/list_students');

		}
		else
		{

			$this->session->set_flashdata('msg1',"Student Records Deletion Failed");
			redirect('student/list_students');


		}

	}
	//View the Edit page 
	public function edit_student()
	{
		$id=$this->uri->segment(3);
		$data['student']=$this->student_model->edit_student($id);
		$this->load->view('header',$data);
		$this->load->view('edit_student');
	}

	//Update Student

	public function  update_student()
	{
		$id=$this->input->post('id');
		$interest=implode(',',$this->input->post('interest'));
		$data=array('name'=>$this->input->post('name'),
			'address'=>$this->input->post('address'),
			'year'=>$this->input->post('year'),
			'gender'=>$this->input->post('gender'),
			'interest'=>$interest,
			'status'=>1);
				
		$result=$this->student_model->update_student($data,$id);
		if($result==true)
		{
			$this->session->set_flashdata('msg',"Student Records Updated Successfully");
			redirect('student/list_students');

		}
		else
		{

			$this->session->set_flashdata('msg1',"No changes Made in Student Records");
			redirect('student/list_students');


		}
	}

	
}









         

        
?>
