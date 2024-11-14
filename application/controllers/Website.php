<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Website extends CI_Controller {



    function __construct()
    {
		parent::__construct();


        $this->load->model('EmployeeModel','EmployeeModel');
    }
    public function AlumniRegister()

      {

      $data['acct_type']=$this->session->userdata('acct_type');
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
            'date_registered' => date('d-m-Y H:i:s'),
            );

        $this->EmployeeModel->EmployeeRegister($data);
        $this->session->set_flashdata('SUCCESSMSG', "Alumni Register Successfully!!");
        redirect('view-alumni');

      }
      else
      {
        $data['getEmployee'] = $this->EmployeeModel->getEmployee();
        $this->load->view('website_alumni_register',$data);

      }

      }

      public function events()
      {
        $data['acct_type']=$this->session->userdata('acct_type');
$data['status']=$this->session->userdata('status');
    $data['getEvents'] = $this->EmployeeModel->getEvents();
    $this->load->view('events',$data);
    $this->load->view('security/sec.php');
      }

            public function alumni()
      {
        $data['acct_type']=$this->session->userdata('acct_type');
$data['status']=$this->session->userdata('status');
    $data['getAlumni'] = $this->EmployeeModel->getEmployee();
    $this->load->view('alumni',$data);
    $this->load->view('security/sec.php');
      }

      public function index()
      {
        $this->load->view('index');
      }


      public function contact()
      {
        $this->load->view('contact');
      }


}//end
