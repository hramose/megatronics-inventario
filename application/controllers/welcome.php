<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/* Creamos el constructor para la clase Welcome */

	public function __construct()
	{
		// Llamamos al constructor del controlador (CI_Controller)
		parent::__construct();
		$this->load->library('session');

		$this->load->model('products_m');
		$this->load->helper('url');
	}


	public function index()
	{
		$this->load->view('v_welcome_message');
	}

	public function prueba()
	{
		$this->products_m->create('SKU0', 'Nuevo producto', 15);

		print_r( $this->products_m->read('list') );
	}

	public function hola()
	{
		$this->load->view('inc/header');
		$this->load->view('v_hola');
		$this->load->view('inc/footer');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */