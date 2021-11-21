<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Keterangan extends Migration
{
    public function up()
    {
        $fields = [
            'id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'nama' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
                'null' => false,
            ],
        ];


        $this->forge->addField($fields);
        $this->forge->addPrimaryKey('id');
        $this->forge->createTable('Keterangan');
    }

    public function down()
    {
        $this->forge->dropTable('Keterangan');
    }
}
