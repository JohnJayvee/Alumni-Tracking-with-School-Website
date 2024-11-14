<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct()
    {
        parent::__construct();
        $this->load->model('LoginModel','LoginModel');
				  $this->load->model('EmployeeModel','EmployeeModel');
    }

		private function verify_password($password)
		{
			return password_verify($password, PASSWORD_DEFAULT);
		}

    public function index()
	{
		$data['acct_type']=$this->session->userdata('acct_type');
		if(!empty($_POST))
        {
            $username = $this->input->post('username');
            $password = $this->verify_password('password');
            $result = $this->LoginModel->login($username,$password);
            if($result -> num_rows() > 0)
            {
                foreach ($result->result() as $row)
                {
                    $this->session->set_userdata('acct_id',$row->acct_id);
                    $this->session->set_userdata('username',$row->username);
                    $this->session->set_userdata('acct_type',$row->acct_type);
                    $this->session->set_userdata('status',$row->status);
                    $sessionuser=$this->session->userdata('username');
                    $sessionid=$this->session->userdata('acct_id');
					$this->logging($sessionuser, $sessionid, 'has a log in as admin');
                    redirect('dashboard');
                }
            }
            else
            {
                $data['username'] = $username;
                $data['password'] = $password;
                $sessionuser=$this->session->userdata('username');
                $sessionid=$this->session->userdata('acct_id');
                $this->session->set_flashdata('SUCCESSMSG','Username and Password is Wrong');
                $this->logging($sessionuser, $sessionid,'Guest try to login');
                $this->load->view('login',$data);

                
            }

        }

		else
		{
			$this->load->view('login');
        }


	}

	public function logout()
    {
        $this->session->sess_destroy();
        $sessionuser=$this->session->userdata('username');
        $sessionid=$this->session->userdata('acct_id');
        $this->logging($sessionuser, $sessionid, 'has logout');
        redirect('login');
    }


		public function logging($whoami,$id,$text){
        
		$logs = "Account $whoami has $text";

		$logdata =  array('acct_id' => $id,
						'text' => $logs
					);
		$this->EmployeeModel->save_logs($logdata);
		
        
    }

}
