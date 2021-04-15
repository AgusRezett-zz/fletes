<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Practicas extends CI_Controller {
    function index(){
        $this->load->view('misVistas/bienvenido');
    }
}

?>