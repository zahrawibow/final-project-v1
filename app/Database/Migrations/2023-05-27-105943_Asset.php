<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;
use CodeIgniter\Database\RawSql;

class Asset extends Migration
{
    public function up()
    {
        // membuat kolom


        $fields = [
            'name' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
                'null' => false,
            ],
            'slug' => [
                'type' => 'VARCHAR',
                'null' => TRUE,
                'constraint' => 100
            ],
            'inventory_number' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
                'null' => false,
            ],
            'merk' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
                'null' => true,
            ],
            'series' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
                'null' => true,
            ],
            'count' => [
                'type' => 'INT',
                'constraint' => 11,
                'null' => false,
            ],
            'manual' => [
                'type' => 'VARCHAR',
                'constraint' => 250,
                'null' => true,
            ],
            'license' => [
                'type' => 'VARCHAR',
                'constraint' => 200,
                'null' => true,
            ],
            'condition' => [
                'type' => 'VARCHAR',
                'constraint' => 50,
                'null' => true,
            ],
            'status' => [
                'type' => 'VARCHAR',
                'constraint' => 50,
                'null' => true,
            ],
            'used_status' => [
                'type' => 'VARCHAR',
                'constraint' => 50,
                'null' => true,
            ],
            'location' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
                'null' => true,
            ],
            'description' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'log_flag' => [
                'type' => 'VARCHAR',
                'constraint' => 25,
                'null' => true,
            ],
            'purchase_date' => [
                'type' => 'DATE',
                'null' => true,
            ],
            'price' => [
                'type' => 'int',
                'null' => true,
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
            'updated_at' => [
                'type' => 'DATETIME',
                'null' => TRUE,
            ],
            'deleted_at' => [
                'type' => 'DATETIME',
                'null' => TRUE,
            ],
        ];
        $this->forge->addField('id');
        $this->forge->addForeignKey('user_id', 'users', 'id');
        $this->forge->addField($fields);

        $this->forge->createTable('assets');
    }

    public function down()
    {
        $this->forge->dropTable('assets');
    }
}
