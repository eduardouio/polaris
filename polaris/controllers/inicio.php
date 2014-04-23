<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Inicio extends CI_Controller {

	/**
	 * Im prime la pantalla de inicio
	 */
	public function index()
	{	
		$data =  array('valor' =>  'Comiendo desde el centro del planeta');
		$this->load->view('welcome_message',$data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */