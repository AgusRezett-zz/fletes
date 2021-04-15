<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Primer_modelo extends CI_Model{
        public function __construct(){
            parent::__construct();
            $this->load->database();
        }
        
        public function agregar_usuario(){
            $this->load->database();
            //$this->db->insert('usuarios', array('usuario' => $data['usuario'],'pwd' => $data['pwd']));
            $this->db->insert('usuarios',$data);
        }
    }
?>