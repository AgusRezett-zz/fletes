<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Vista2 extends CI_Controller {

	public function index()
	{
        $dato['string'] = "Mensaje desde el controlador";
        
        
		$this->load->view('vista2');
	}
}
