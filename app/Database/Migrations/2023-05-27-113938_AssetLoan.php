<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;
use CodeIgniter\Database\RawSql;

class AssetLoan extends Migration
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
            'purpose' => [
                'type' => 'varchar',
                'constraint' => 255,
                'null' => false
            ],
            'loan_time' => [
                'type' => 'date',
                'null' => false
            ],
            'permission_tax' => [
                'type' => 'varchar',
                'constraint' => 255,
                'null' => true
            ],
            'validation' => [
                'type' => 'varchar',
                'constraint' => 255,
                'null' => true
            ],
            'validator' => [
                'type' => 'varchar',
                'constraint' => 255,
                'null' => true
            ],
            'status' => [
                'type' => 'varchar',
                'constraint' => 255,
                'null' => true
            ],
            'return_time' => [
                'type' => 'date',
                'null' => true
            ],
            'current_condition' => [
                'type' => 'varchar',
                'constraint' => 255,
                'null' => false
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

        $this->forge->createTable('asset_loans');
    }

    public function down()
    {
        $this->forge->dropTable('asset_loans');
    }
}
