<?php
class profile extends CI_Model
{
    /*View*/
    function display_records($email)
    {
        $query = $this->db->select('*')->from('users')->where('email', $email)->get();
        return $query->result();
    }
}
