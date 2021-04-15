<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class Crud extends CI_Controller 
{
	public function __construct(){
	parent::__construct();
	$this->load->database();
	$this->load->model('Crud_model');
	}
        /*Insert*/
	public function savedata(){
		$this->load->view('insert');
		if($this->input->post('save'))
		{
		    $data['usuario']=$this->input->post('usuario');
			$data['pwd']=$this->input->post('pwd');
			$response=$this->Crud_model->saverecords($data);
			if($response==true){
			        echo "Records Saved Successfully";
			}
			else{
					echo "Insert error !";
			}
		}
	}
	
}
?>