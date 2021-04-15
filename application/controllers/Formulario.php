<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Formulario extends CI_Controller {
    public function __construc(){
        parent::__construct();
        $this->load->helper('form');
        $this->load->model('primer_modelo');
    }
    
	public function index()
	{   
		$this->load->view('Formulario');
        $this->load->helper('form');
	}
    
    public function recibir_datos(){
        $this->load->helper('form');
        $this->load->model('primer_modelo');
        
        $data = array(
            'usuario' => $this->input->post('usuaurio'),
            'pwd' => $this->input->post('pwd')
        );
        
        $this->primer_modelo->agregar_usuario($data);
        $this->load->view('Formulario');
    }
    
    
}
?>