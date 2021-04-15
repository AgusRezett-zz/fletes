<?php
class Crud_model_delete extends CI_Model 
{
    
    function eliminar(){
        $query=$this->db->get("usuarios");
        return $query->result();
    }
  function deleterecords($id){
        $this->db->where("id", $id);
        $this->db->delete("usuarios");
        return true;
    }
}