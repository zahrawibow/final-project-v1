<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Attendance extends Migration
{
    public function up()
    {
        // Kolom
        $fields = [
            'user_id' => [
                'type' => 'int',
                'unsigned' => true,
                'null' => false,
            ],
            'activity' => [
                'type' => 'varchar',
                'constraint' => '250',
                'null' => false,
            ],
            'description' => [
                'type' => 'text',
                'null' => true,
            ],
            'created_at' => [
                'type' => 'datetime',
                'null' => true
            ],
        ];

        $this->forge->addField('id');
        $this->forge->addField($fields);

        $this->forge->addForeignKey('user_id', 'users', 'id');

        $this->forge->createTable('attendances');
    }

    public function down()
    {
        $this->forge->dropTable('attendances');
    }
}
