<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class home extends CI_Controller {

	public function index()
	{
		if($_POST)
		{
			$this->load->model('home_model');
			$result = $this->home_model->check_login();
			if($result)
			{
				$get_id=$this->home_model->get_id();
				foreach($get_id as $val)
                { 
                     $mobileno = $val->mobileno;
                     $fname = $val->firstname;
                     $lname = $val->lastname;
                     $state = $val->state;
                     $email=$val->email;
                     $city = $val->city;
                     $username=$val->username;
                     $adminid=$val->admin_id;
                    
            }
           $data = array(
                'mobileno'=>$mobileno,
                'firstname'=>$fname,
                'lastname'=>$lname,
                'email'=>$email,
                'state'=>$state,
                'city'=>$city,
                'admin_id' => $adminid,
                'username' => $username,
                'is_logged_in' => true
            );
		//	print_r($data);
            $this->session->set_userdata($data); /*Here you can set the values in session */
				echo true;
			}
		}
	else{		
		$this->load->view('home');
        $this->load->view('student/footer');
		}
	}

	public function welcome()
	{
		redirect('student');
	}
	 public function logout()
    {
        $this->session->sess_destroy();
        redirect('home');
    }
	
}
