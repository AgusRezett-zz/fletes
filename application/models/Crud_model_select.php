<?php
class Crud_model_select extends CI_Model 
{
    function display_records(){
        $query=$this->db->get("usuarios");
        return $query->result();
    }
	
} 
?>