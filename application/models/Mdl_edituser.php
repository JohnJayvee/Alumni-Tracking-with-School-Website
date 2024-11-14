<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Mdl_edituser extends CI_Model
{

    function __construct() {
    parent::__construct();
    }

    function get_table()
    {
        $table = "tbl_accounts";
        return $table;
    }

    function _update($acct_id, $data)
    {
        $table = $this->get_table();
        $this->db->where('acct_id', $acct_id);
        $this->db->update($table, $data);

    }

    function get_where($acct_id){
        $table = $this->get_table();
        $this->db->where('acct_id', $acct_id);
        $query = $this->db->get($table);
        return $query;
    }

}//end of class
