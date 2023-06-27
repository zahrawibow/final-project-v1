<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TeamsMigration extends Migration
{
    public function up()
    {
        $fields = [
            'team' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
                'null' => false,
            ],
            'lesson' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
                'null' => false,
            ],
            'semester' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
                'null' => false,
            ],
        ];
        $this->forge->addField('id');
        $this->forge->addField($fields);

        $this->forge->createTable("teams");
    }

    public function down()
    {
        $this->forge->dropTable("teams");
    }
}
