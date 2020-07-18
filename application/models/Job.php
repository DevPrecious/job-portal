<?php
class job extends CI_Model
{
    /*View*/
    function display_records()
    {
        $query = $this->db->query("select * from jobs order by id DESC");
        return $query->result();
    }

    function details($id)
    {
        $query = $this->db->query("select * from jobs where id='$id'");
        return $query->result();
    }
}
