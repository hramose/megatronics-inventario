<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Create_megatronics_schema extends CI_Migration {

	function up()
	{
		// Crear tabla de productos (products)

		$this->dbforge->add_field(array(
			'id' => array(
				'type' => 'MEDIUMINT',
				'constraint' => '8',
				'unsigned' => TRUE,
				'auto_increment' => TRUE
			),
			'sku' => array(
				'type' => 'VARCHAR',
				'constraint' => '20',
			),
			'description' => array(
				'type' => 'VARCHAR',
				'constraint' => '100',
			),
			'qty' => array(
				'type' => 'INT',
				'constraint' => '100',
			)
		));
		$this->dbforge->add_key('id', TRUE);
		$this->dbforge->create_table('products');

	}

	function down() 
	{
		// Destruir tabla de productos
		$this->dbforge->drop_table('products');
	}
}