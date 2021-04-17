<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	class Crud extends CI_Controller {
		public function __construct(){
		parent::__construct();
		$this->load->database();
		$this->load->model('Crud_model');
		}

		/*Insert*/
		public function registerUser(){
			if($this->input->post('save')){
				$data['nombre']=$this->input->post('nombre');
				$data['apellido']=$this->input->post('apellido');
				$data['correo']=$this->input->post('correo');
				$data['password']=$this->input->post('password');
				$response=$this->Crud_model->saveUser($data);
				
				$url = base_url()."index.php";
				if($response==true){
					session_start();
					$_SESSION['usuario'] = $data['nombre'];
					header("Location:$url/inicio");
				}
				else{
					echo "Insert error !";
				}
			}
		}

		public function insertRecord(){
			if($this->input->post('save')){
				$data['direccion']=$this->input->post('direccion');
				$data['costo']=$this->input->post('costo');
				$data['costo_adicional']=$this->input->post('costoad');
				$data['fecha_pedido']=$this->input->post('fechapedido');
				$data['fecha_entrega']=$this->input->post('fechaentrega');
				$data['tipo']=$this->input->post('tipo');
				$response=$this->Crud_model->saveRecord($data);
				
				$url = base_url()."index.php";
				if($response==true){
					header("Location:$url/insert?insert=true");
				}
				else{
					header("Location:$url/insert?insert=false");
				}
			}
		}
	}
?>