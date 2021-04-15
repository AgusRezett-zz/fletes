<?php
class Crud_model_update extends CI_Model 
{
    
	function display_records(){
        $query=$this->db->query("select * from usuarios");
	   return $query->result();
	}
    
    function displayrecordsById($id){
        $query=$this->db->query("select * from usuarios where id=".$id);
	   return $query->result();
	}
	
	function update_records($usuario,$pwd,$id){
	$query=$this->db->query("update usuarios SET usuario='".$usuario."',pwd='".$pwd."' where id=".$id);
	}
	
}