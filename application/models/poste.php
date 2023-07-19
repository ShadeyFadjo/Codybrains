<?php
if(!defined('BASEPATH')) exit('No direct script access allowed');
class Poste extends CI_Model
{
    public function getpostes()
    {
        $this->load->database();
        $query=$this->db->query("select * from poste");
        $data=array();
        
        foreach($query->result_array() as $row)
        {
            $data[] = $row;
        }
        return $data;
    }
   
}

?>