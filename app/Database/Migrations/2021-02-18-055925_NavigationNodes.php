<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class NavigationNodes extends Migration
{
	public function up()
	{
		//
		$this->forge->addField([
			'id'=> [
				'type' =>'INT',
				'unsigned'=>true,
				'null'=>true
			],
			'node_name'=>[
				'type'=>'VARCHAR',
				'null'=>true
            ],
			'node_link'=>[
				'type'=>'VARCHAR',
			],
			'parent_node'=>[
				'type'=>'VARCHAR',
			]

		]);
		$this->forge->addPrimaryKey('id');
		$this->forge->createTable('navigationnodes');


	}

	public function down()
	{
		//
		$this->forge->dropTable('navigationnodes');
	}
}
