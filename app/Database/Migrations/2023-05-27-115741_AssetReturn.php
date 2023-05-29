<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\RawSql;
use CodeIgniter\Database\Migration;

class AssetReturn extends Migration
{
    public function up()
    {
        //
        $fields = [
            'loan_id' => [
                'type' => 'int',
                // 'unsigned' => true,
                'null' => false
            ],
            'return_time' => [
                'type' => 'date',
                'null' => false
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
        $this->forge->addForeignKey('loan_id', 'asset_loans', 'id');
        // $this->forge->addForeignKey('user_id', 'users', 'id');

        $this->forge->createTable('asset_returns');
    }

    public function down()
    {
        $this->forge->dropTable('asset_returns');
    }
}
