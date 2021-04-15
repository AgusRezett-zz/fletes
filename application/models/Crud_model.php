<?php
 defined('BASEPATH') OR exit('No direct script access allowed');
class Crud_model extends CI_Model 
{
	
	function saverecords($data)
	{
        $this->db->insert('usuarios',$data);
        return true;
	}
	
}
?>