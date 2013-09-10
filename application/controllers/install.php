<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Install extends CI_Controller {

	/* Creamos el constructor para la clase Welcome */

	public function __construct()
	{
		// Llamamos al constructor del controlador (CI_Controller)
		parent::__construct();

		// Cargamos la clase requerida
		$this->load->library('migration');
	}

	/* Metodo generico para la creacion de tablas */
	public function index()
	{
		// actualizamos la base de datos a la ultima version disponible
		if(!$this->migration->latest())
		{
			// si ocurre un problema:
			show_error($this->migration->error_string());
		}
		else
		{
			echo('Database updated and ready to go!');
		}
	}

	public function reset()
	{
		// en caso que no exista el segmento,
		// el valor de $version sera 0
		$version = $this->uri->segment(3, 0);

		// reseteamos la version a 0
		$this->migration->version(0);

		if ($version == 0)
		{
			// implementamos la mas nueva si no hay parametro
			$this->migration->latest();
		}
		else
		{
			// implementamos $version
			$this->migration->version($version);
		}
	}


}