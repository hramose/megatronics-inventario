<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/* Creamos el constructor para la clase Welcome */

	public function __construct()
	{
		// Llamamos al constructor del controlador (CI_Controller)
		parent::__construct();
		$this->load->library('session');
	}


	public function index()
	{
		$this->load->view('v_welcome_message');
	}

	public function hola()
	{
		$this->load->view('v_hola');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */