<?php  
class Crud_select extends CI_Controller 
{
  public function __construct(){
      parent::__construct();
        $this->load->database();
        $this->load->model('Crud_model_select');
  }
  
    public function displaydata(){
        $result['data']=$this->Crud_model_select->display_records();
        $this->load->view('mostrar_registros',$result);
  }
	
}
?>