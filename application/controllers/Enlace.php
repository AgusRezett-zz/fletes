<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Enlace extends CI_Controller {
    function index(){
        $this->load->view('misVistas/prueba');
    }
    //Llamando a otra vista desde una nueva funcion
    /*function v2(){
        $this->load->view('vista2');
    }*/
    
}

?>