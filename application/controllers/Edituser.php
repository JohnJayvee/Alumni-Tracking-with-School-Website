<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Edituser extends CI_Controller
{

    function __construct() {
    parent::__construct();
    }

    public function hash_password($password){
      return password_hash($password, PASSWORD_BCRYPT);
    }


    function fetch_data_from_post()
    {
        // associative array where key=column_name and value=value from post

        $data['username'] = $this->input->post('username', TRUE);
        $hashed = $this->input->post('password', TRUE);
        $data['password'] = $this->hash_password('$hashed');
        $data['status'] = $this->input->post('status', TRUE);
        $data['acct_type'] = $this->input->post('acct_type', TRUE);

        return $data;

    }

    function fetch_data_from_db($update_id)
    {
        $query = $this->get_where($update_id);
        foreach ($query->result() as $row) {

            $data['username'] = $row->username;
            $data['password'] = $row->password;
            $data['status'] = $row->status;
            $data['acct_type'] = $row->acct_type;

        }

        if (!isset($data)){
            $data = "";
        }
        return $data;
    }

    function update()
    {
        $update_id = $this->uri->segment(3);
        $submit = $this->input->post("submit");

        if ($submit == "Cancel") {
            redirect('view-users');
        }


        $this->form_validation->set_rules('username', 'username','required' );
        $this->form_validation->set_rules('password', 'password','required' );
        $this->form_validation->set_rules('status', 'status','required' );
        $this->form_validation->set_rules('acct_type', 'acct_type','required' );




        if ($this->form_validation->run() == False){
            $data = $this->fetch_data_from_db($update_id);
            $data['update_id'] = $update_id;
            $this->load->view('edit_user', $data);
        }
        else
        {
            $data = $this->fetch_data_from_post();
            $this->_update($update_id, $data);
            $this->session->set_flashdata('SUCCESSMSG', "Account Successfully Updated!!");
            redirect('view-users');
        }
    }

    function get($order_by)
    {
        $this->load->model('mdl_edituser');
        $query = $this->mdl_edituser->get($order_by);
        return $query;
    }

    function _update($id, $data)
    {
        if (!is_numeric($id)) {
            die('Non-numeric variable!');
        }

        $this->load->model('mdl_edituser');
        $this->mdl_edituser->_update($id, $data);
    }

    function get_where($id){
        if (!is_numeric($id)){
            die('Non-numeric variable!');
        }

        $this->load->model('mdl_edituser');
        $query = $this->mdl_edituser->get_where($id);
        return $query;
    }

}//end class
