
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cuenta extends CI_Controller {
	public function index()
	{
		$this->load->view('account');
	}
}
