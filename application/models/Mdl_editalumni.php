<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Mdl_editalumni extends CI_Model
{

    function __construct() {
    parent::__construct();
    }

    function get_table()
    {
        $table = "tbl_alumni";
        return $table;
    }

    function _update($alumni_id, $data)
    {
        $table = $this->get_table();
        $this->db->where('alumni_id', $alumni_id);
        $this->db->update($table, $data);

    }

    function get_where($alumni_id){
        $table = $this->get_table();
        $this->db->where('alumni_id', $alumni_id);
        $query = $this->db->get($table);
        return $query;
    }

}//end of class
