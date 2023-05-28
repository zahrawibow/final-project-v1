<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\RawSql;
use CodeIgniter\Database\Migration;

class Practicum extends Migration
{
    public function up()
    {
        $fields = [
            'asset_id' => [
                'type' => 'int',
                // 'unsigned' => true,
                'null' => false
            ],
            'user_id' => [
                'type' => 'int',
                'unsigned' => true,
                'null' => false
            ],
            'laboratorian_id' => [
                'type' => 'int',
                // 'unsigned' => true,
                'null' => false
            ],
            'title' => [
                'type' => 'varchar',
                'constraint' => 255,
                'null' => false
            ],
            'module' => [
                'type' => 'varchar',
                'constraint' => 255,
                'null' => true
            ],
            'team' => [
                'type' => 'text',
                'null' => false
            ],
            'description' => [
                'type' => 'text',
                'null' => true
            ],
            'schedule' => [
                'type' => 'datetime',
                'null' => false
            ],
            'location' => [
                'type' => 'varchar',
                'constraint' => 255,
                'null' => true
            ],
            'status' => [
                'type' => 'varchar',
                'constraint' => 255,
                'null' => true
            ],
            'created_at' => [
                'type' => 'timestamp',
                'null' => false,
                'default' => new RawSql('CURRENT_TIMESTAMP')
            ],
        ];

        $this->forge->addField('id');
        $this->forge->addField($fields);

        // FK
        $this->forge->addForeignKey('asset_id', 'assets', 'id');
        $this->forge->addForeignKey('user_id', 'users', 'id');
        $this->forge->addForeignKey('laboratorian_id', 'laboratorians', 'id');

        $this->forge->createTable('practicums');
    }

    public function down()
    {
        //
        $this->forge->dropTable('practicums');
    }
}
