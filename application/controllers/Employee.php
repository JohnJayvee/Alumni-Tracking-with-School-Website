<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Employee extends CI_Controller {



    function __construct()
    {
		parent::__construct();

        if($this->session->username == "")
        {
            redirect('login');
        }
        $this->load->model('EmployeeModel','EmployeeModel');
    }

  public function Not_allowed()
  {
      $this->load->view('page_error/index.html');
  }


	public function Calendar()
	{
		$data['acct_type']=$this->session->userdata('acct_type');
		$data['getEmployee'] = $this->EmployeeModel->getEmployee();
		$data['getHoliday'] = $this->EmployeeModel->getHoliday();
		$data['getAttendance'] = $this->EmployeeModel->getAttendance();
		$data['getSalary'] = $this->EmployeeModel->getSalary();


		$data['getShift'] = $this->EmployeeModel->getShift();
		$data['getShiftAttendance'] = $this->EmployeeModel->getShiftAttendance();




		$this->load->view('calendar',$data);
	}

  public function hash_password($password){
    return password_hash($password, PASSWORD_BCRYPT);
  }

  public function logging($whoami,$id,$text){

	$logs = "Admin $whoami has $text";

	$logdata =  array('acct_id' => $id,
				  'text' => $logs
				);
	$this->EmployeeModel->save_logs($logdata);
  }


  public function UsersRegister()
	{
		$data['status']=$this->session->userdata('status');
		$data['acct_type']=$this->session->userdata('acct_type');
		$sessionuser=$this->session->userdata('username');
		$sessionid=$this->session->userdata('acct_id');
		if(!empty($_POST))
		{
			$data =  array('acct_id' => $this->input->post('acct_id'),
				    'firstname' => $this->input->post('firstname'),
				    'lastname' => $this->input->post('lastname'),
					'username' => $this->input->post('username'),
					'password' => $this->hash_password('password'),
					'status' => $this->input->post('status'),
					'acct_type' => $this->input->post('acct_type')
					);
			$this->EmployeeModel->UsersRegister($data);
			$this->session->set_flashdata('SUCCESSMSG', "User Registered Successfully!!");
			$this->logging($sessionuser, $sessionid, 'registered a user');
			redirect('view-users');
		}
		else
		{
			$data['getEmployee'] = $this->EmployeeModel->getUsers();
			$this->load->view('users_register',$data);
			$this->load->view('security/sec.php');
		}
	}


	//public function ViewUsers()
	//{
		//$data['status']=$this->session->userdata('status');
		//$data['acct_type']=$this->session->userdata('acct_type');
		//$data['getUsers'] = $this->EmployeeModel->getUsers();
		//$this->load->view('view_users',$data);
	//}

	public function ViewAccount()
	{

		$data['status']=$this->session->userdata('status');
		$data['acct_type']=$this->session->userdata('acct_type');
		$data['getUserData'] = $this->EmployeeModel->joinUserData();
		$this->load->view('view_users',$data);
		$this->load->view('security/sec.php');
	}

	public function ViewAlumni()
	{
		$data['status']=$this->session->userdata('status');
		$data['acct_type']=$this->session->userdata('acct_type');
		$data['getEmployee'] = $this->EmployeeModel->getEmployee();
		$this->load->view('view_alumni',$data);
		$this->load->view('security/sec.php');
	}


	public function SearchViewAlumni()
    {
    	$data['acct_type']=$this->session->userdata('acct_type');
    	$data['status']=$this->session->userdata('status');
    	$data['getEmployee'] = $this->EmployeeModel->getEmployee();
    	$this->load->view('alumni_search_view',$data);
    	$this->load->view('security/sec.php');
    }

	public function AlumniRegister()

    {
    $data['status']=$this->session->userdata('status');
	$data['acct_type']=$this->session->userdata('acct_type');
    $sessionuser=$this->session->userdata('username');
    $sessionid=$this->session->userdata('acct_id');
		if(!empty($_POST))
		{
			$data =  array('alumni_tracking_no' => $this->input->post('alumni_tracking_no'),
					'firstname' => $this->input->post('firstname'),
          'middlename' => $this->input->post('middlename'),
          'lastname' => $this->input->post('lastname'),
          'datebirth' => $this->input->post('datebirth'),
          'sex' => $this->input->post('sex'),
          'civil_status' => $this->input->post('civil_status'),
          'address' => $this->input->post('address'),
          'contact_number' => $this->input->post('contact_number'),
          'email' => $this->input->post('email'),
          'citizenship' => $this->input->post('citizenship'),
          'date_registered' => date('Y-m-d H:i:s'),
          'etty_show' => '1',
					);

			$this->EmployeeModel->EmployeeRegister($data);
			$this->session->set_flashdata('SUCCESSMSG', "Alumni Register Successfully!!");
      $this->logging($sessionuser, $sessionid, 'registered a alumni');
			redirect('view-alumni');

		}
		else
		{
			$data['getEmployee'] = $this->EmployeeModel->getEmployee();
			$this->load->view('alumni_register',$data);
			$this->load->view('security/sec.php');

		}

    }

	function delete_user(){
    $id = $this->input->get('id');
    $sessionuser=$this->session->userdata('username');
	$sessionid=$this->session->userdata('acct_id');
    $this->load->model('EmployeeModel');
    $this->EmployeeModel->delete_user($id);
    $this->session->set_flashdata('SUCCESSMSG', "Account Delete Successfully!!");
    $this->logging($sessionuser, $sessionid, 'delete a user');
		redirect('view-users');
	}

	function delete_alumni(){
    $alumni_id = $this->input->get('alumni_id');
    $sessionuser=$this->session->userdata('username');
	$sessionid=$this->session->userdata('acct_id');
    $this->load->model('EmployeeModel');
    $this->EmployeeModel->delete_alumni($alumni_id);
    $this->session->set_flashdata('SUCCESSMSG', "Alumni Delete Successfully!!");
    $sessionuser=$this->session->userdata('username');
	$sessionid=$this->session->userdata('acct_id');
    $this->logging($sessionuser, $sessionid, 'delete a alumni');
    redirect('view-alumni');
	}

	function delete_events(){
    $id = $this->input->get('id');
    $sessionuser=$this->session->userdata('username');
	$sessionid=$this->session->userdata('acct_id');
    $this->load->model('EmployeeModel');
    $this->EmployeeModel->delete_events($id);
    $this->session->set_flashdata('SUCCESSMSG', "Account Delete Successfully!!");
    $this->logging($sessionuser, $sessionid, 'delete a events');
		redirect('view-events');
	}

	function delete_attendance(){
    $id = $this->input->get('id');
    $sessionuser=$this->session->userdata('username');
	$sessionid=$this->session->userdata('attend_id');
    $this->load->model('EmployeeModel');
    $this->EmployeeModel->delete_attendance($id);
    $this->session->set_flashdata('SUCCESSMSG', "Account Delete Successfully!!");
    $this->logging($sessionuser, $sessionid, 'delete a attendance');
		redirect('view-attendance');
	}	

	public function EventsRegister()
  {
  $data['status']=$this->session->userdata('status');
    $data['acct_type']=$this->session->userdata('acct_type');
    if(!empty($_POST))
    {
      $data =  array('event_id' => $this->input->post('event_id'),
          'event_title' => $this->input->post('event_title'),
          'event_time' => $this->input->post('event_time'),
          'event_venue' => $this->input->post('event_venue'),
          'event_date' => $this->input->post('event_date'),
          'event_posted' => date('y-m-d H:i:s'),

          );
      $this->EmployeeModel->EventsRegister($data);
      $this->session->set_flashdata('SUCCESSMSG', "Event Register Successfully!!");
      redirect('view-events');
    }
    else
    {
      $data['getEmployee'] = $this->EmployeeModel->getEvents();
      $this->load->view('events_register',$data);
    }
  }

	public function ViewEvents() 
{
$data['acct_type']=$this->session->userdata('acct_type');
$data['status']=$this->session->userdata('status');
		$data['getEvents'] = $this->EmployeeModel->getEvents();
		$this->load->view('view_events',$data);
		$this->load->view('security/sec.php');

}


	public function ViewAttendance()
	{
		$data['status']=$this->session->userdata('status');
		$data['acct_type']=$this->session->userdata('acct_type');
		$data['getAttendance'] = $this->EmployeeModel->joinAttendance();
		$this->load->view('view_attendance',$data);
		$this->load->view('security/sec.php');
	}

    public function AttendanceRegister()
	{
		$data['status']=$this->session->userdata('status');
		$data['acct_type']=$this->session->userdata('acct_type');
		$this->load->view('security/sec.php');
    if(!empty($_POST))
    {
      $data =  array('attend_id' => $this->input->post('attend_id'),
          'event_id' => $this->input->post('event_time'),
          'alumni_id' => $this->input->post('name'),
          'date_time_attend' => date('y-m-d H:i:s'),



          );
      $this->EmployeeModel->AttendanceRegister($data);
      $this->session->set_flashdata('SUCCESSMSG', "Event Register Successfully!!");
      redirect('view-attendance');
    }
    else
    {
      $data['getEvents'] = $this->EmployeeModel->getEvents();
	$data['getAlumni'] = $this->EmployeeModel->getEmployee();
      $this->load->view('attendance_register',$data);
    }
	}


		




}//end
