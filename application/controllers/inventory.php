<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Inventory extends CI_Controller {

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
		$this->load->view('v_inventory_index');
	}

}
