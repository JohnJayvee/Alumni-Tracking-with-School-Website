<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Editalumni extends CI_Controller
{

    function __construct() {
    parent::__construct();

    }



    function fetch_data_from_post()
    {
        // associative array where key=column_name and value=value from post

        $data['firstname'] = $this->input->post('firstname', TRUE);
        $data['middlename'] = $this->input->post('middlename', TRUE);
        $data['lastname'] = $this->input->post('lastname', TRUE);
        $data['datebirth'] = $this->input->post('datebirth', TRUE);
        $data['sex'] = $this->input->post('sex', TRUE);
        $data['civil_status'] = $this->input->post('civil_status', TRUE);
        $data['address'] = $this->input->post('address', TRUE);
        $data['contact_number'] = $this->input->post('contact_number', TRUE);
        $data['email'] = $this->input->post('email', TRUE);
        $data['citizenship'] = $this->input->post('citizenship', TRUE);


        return $data;

    }

    function fetch_data_from_db($update_id)
    {
        $query = $this->get_where($update_id);
        foreach ($query->result() as $row) {

            $data['firstname'] = $row->firstname;
            $data['middlename'] = $row->middlename;
            $data['lastname'] = $row->lastname;
            $data['datebirth'] = $row->datebirth;
            $data['sex'] = $row->sex;
            $data['civil_status'] = $row->civil_status;
            $data['address'] = $row->address;
            $data['contact_number'] = $row->contact_number;
            $data['email'] = $row->email;
            $data['citizenship'] = $row->citizenship;

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


        $this->form_validation->set_rules('firstname', 'firstname','required' );
        $this->form_validation->set_rules('middlename', 'middlename','required' );
        $this->form_validation->set_rules('lastname', 'lastname','required' );
        $this->form_validation->set_rules('datebirth', 'datebirth','required' );
        $this->form_validation->set_rules('sex', 'sex','required' );
        $this->form_validation->set_rules('civil_status', 'civil_status','required' );
        $this->form_validation->set_rules('address', 'address','required' );
        $this->form_validation->set_rules('contact_number', 'contact_number','required' );
        $this->form_validation->set_rules('email', 'email','required' );
        $this->form_validation->set_rules('citizenship', 'citizenship','required' );









        if ($this->form_validation->run() == False){
            $data = $this->fetch_data_from_db($update_id);
            $data['update_id'] = $update_id;
            $this->load->view('edit_alumni', $data);
        }
        else
        {
            $data = $this->fetch_data_from_post();
            $this->_update($update_id, $data);
            $this->session->set_flashdata('SUCCESSMSG', "Account Successfully Updated!!");
            redirect('view-alumni');
        }
    }

    function get($order_by)
    {
        $this->load->model('mdl_editalumni');
        $query = $this->mdl_editalumni->get($order_by);
        return $query;
    }

    function _update($id, $data)
    {
        if (!is_numeric($id)) {
            die('Non-numeric variable!');
        }

        $this->load->model('mdl_editalumni');
        $this->mdl_editalumni->_update($id, $data);
    }

    function get_where($id){
        if (!is_numeric($id)){
            die('Non-numeric variable!');
        }

        $this->load->model('mdl_editalumni');
        $query = $this->mdl_editalumni->get_where($id);
        return $query;
    }

}//end class
