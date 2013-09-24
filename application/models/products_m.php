<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Products_m extends CI_Model
{

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}


	public function create($sku = null, $desc = '', $qty = 1)
	{
		/**
		*	id AI, sku varchar(20), description varchar(100), qty int
		**/

		$data = array(
		   'sku' => $sku,
		   'description' => $desc,
		   'qty' => $qty
		);

		$this->db->insert('products', $data); 

	}



	public function read($action = 'list', $sku = '')
	{
		switch ($action) {
			case 'list':
				$query = $this->db->query('SELECT * FROM products');
				return $query->result(); 
	
			break;
			
			case 'details':


			break;

			default:
				return 'no action selected';
				break;
		}

	}

	public function update()
	{

	}


	// sku =  stock keeping unit
	public function delete($sku)
	{

	}


}