<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\RawSql;
use CodeIgniter\Database\Migration;

class Assetlogs extends Migration
{
    public function up()
    {
        $fields = [
            'purpose' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
                'null' => false,
            ],
            'asset_id' => [
                'type' => 'INT',
                'null' => TRUE,
                'constraint' => 11
            ],
            'laboratorian_id' => [
                'type' => 'INT',
                'null' => TRUE,
                'constraint' => 11
            ],
            'currant_condition' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
                'null' => false,
            ],
            'start_time' => [
                'type' => 'TIME',
                'null' => false,
            ],
            'end_time' => [
                'type' => 'TIME',
                'null' => false,
            ],
            'user_id' => [
                'type' => 'int',
                'unsigned' => true,
                'null' => false
            ],
            'created_at' => [
                'type' => 'DATETIME',
                'default' => new RawSql('CURRENT_TIMESTAMP')
            ],
            
        ];
        $this->forge->addField('id');
        $this->forge->addForeignKey('user_id', 'users', 'id');
        $this->forge->addForeignKey('asset_id', 'assets', 'id');
        $this->forge->addForeignKey('laboratorian_id', 'laboratorians', 'id');
        $this->forge->addField($fields);

        $this->forge->createTable("asset_logs");
    }

    public function down()
    {
        $this->forge->dropTable("asset_logs");
    }
}
