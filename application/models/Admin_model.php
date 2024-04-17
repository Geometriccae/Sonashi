<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model {

    function insertUser($data)
    {
        $this->db->insert('lead',$data);
        if ($this->db->affected_rows() >=0){
            return true;
        } else {
            return false;
        }
    }  

}
?>