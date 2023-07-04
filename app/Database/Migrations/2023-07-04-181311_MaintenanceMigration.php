<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class MaintenanceMigration extends Migration
{
    public function up()
    {
        $fields = [
            'maintenance_name' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
                'null' => false,
            ],
            'asset_id' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
                'null' => false,
            ],
            'date' => [
                'type' => 'date',
                'null' => false
            ],
            'status' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
                'null' => false,
            ],
            'description' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
                'null' => false,
            ],

        ];
        $this->forge->addField('id');
        $this->forge->addField($fields);

        $this->forge->createTable("maintenance");
    }


    public function down()
    {
        $this->forge->dropTable("maintenance");
    }
}
