<?php  
class Crud_update extends CI_Controller 
{
	public function __construct(){
	   parent::__construct();
	   $this->load->database();
	   $this->load->model('Crud_model_update');
	}
	
    public function dispdata(){
	   $result['data']=$this->Crud_model_update->display_records();
	   $this->load->view('pre_modificar_registros',$result);
	}
	
    public function updatedata(){
        $id=$this->input->get('id');
	   $result['data']=$this->Crud_model_update->displayrecordsById($id);
        $this->load->view('after_modificar_registros',$result);
	
		if($this->input->post('update')){
		  $usuario=$this->input->post('usuario');
		  $pwd=$this->input->post('pwd');
		  $this->Crud_model_update->update_records($usuario,$pwd,$id);
          echo 'Datos Actualizados Exitosamente !';
		}
	}
	
}
?>