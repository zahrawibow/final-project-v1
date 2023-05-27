<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Laboratorians extends Migration
{
    public function up()
    {
        //
        // Kolom
        $fields = [
            'user_id' => [
                'type' => 'int',
                'unsigned' => true,
                'null' => false,
            ],
        ];

        $this->forge->addField('id');
        $this->forge->addField($fields);

        $this->forge->addForeignKey('user_id', 'users', 'id');

        $this->forge->createTable('laboratorians');
    }

    public function down()
    {
        $this->forge->dropTable('laboratorians');
    }
}
