<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	class Crud_model extends CI_Model{
		//Funcion para registrar un usuario
		function saveUser($data){
			$this->db->insert('usuario',$data);
			return true;
		}
		//Funcion para registrar un nuevo flete
		function saveRecord($data){
			$this->db->insert('fletes',$data);
			return true;
		}
	}
?>