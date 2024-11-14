<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {


    function __construct()
    {
        parent::__construct();
        if($this->session->username == "")
        {
            redirect('login');
        }
        $this->load->model('LoginModel','LoginModel');
        $this->load->model('EmployeeModel','EmployeeModel');
    }

    public function index()
    {
        $data['acct_type']=$this->session->userdata('acct_type');
        $data['status']=$this->session->userdata('status');
        $sessionuser=$this->session->userdata('username');
        $sessionid=$this->session->userdata('acct_id');
        $data['getLogs'] = $this->EmployeeModel->getLogs();
        $this->load->view('dashboard',$data);
        $this->load->view('security/sec.php');

   

    }


}
