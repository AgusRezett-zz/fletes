<?php  
class Crud_delete extends CI_Controller 
{
	public function __construct(){
        parent::__construct();
        $this->load->database();
        $this->load->model('Crud_model_delete');
    }
	public function displaydata(){
	   $result['data']=$this->Crud_model_delete->eliminar();
	   $this->load->view('eliminar',$result);
	}
	
    public function deletedata(){
      $id=$this->input->get('id');
      $response=$this->Crud_model_delete->deleterecords($id);
      if($response==true){
        echo "Data deleted successfully !";
      }else{
            echo "Error !";
        }
    }
//emi2003pchas@gmail.com
}
?>