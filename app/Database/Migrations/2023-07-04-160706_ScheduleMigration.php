<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class ScheduleMigration extends Migration
{
    public function up()
    {
        $fields = [
            'activity_name' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
                'null' => false,
            ],
            'laboratorian_id' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
                'null' => false,
            ],
            'date' => [
                'type' => 'date',
                'null' => false
            ],
            'start_time' => [
                'type' => 'TIME',
                'null' => false,
            ],
            'end_time' => [
                'type' => 'TIME',
                'null' => false,
            ],
            'activity_location' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
                'null' => false,
            ],
            'activity_status' => [
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

        $this->forge->createTable("schedule");
    }

    public function down()
    {
        $this->forge->dropTable("schedule");
    }
}
