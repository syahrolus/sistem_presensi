<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AmbilPelajaran extends Migration
{
    public function up()
    {
        $this->db->disableForeignKeyChecks();
        $fields = [
            'id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'siswa_id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'null' => false,
            ],
            'pelajaran_id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'null' => false,
            ],
            'pengajar_id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'null' => false,
            ]
        ];


        $this->forge->addField($fields);
        $this->forge->addPrimaryKey('id');
        $this->forge->addForeignKey('siswa_id', 'Users', 'id');
        $this->forge->addForeignKey('pengajar_id', 'Users', 'id');
        $this->forge->addForeignKey('pelajaran_id', 'Pelajaran', 'id');
        $this->forge->createTable('AmbilPelajaran');
        $this->db->enableForeignKeyChecks();
    }

    public function down()
    {
        $this->forge->dropTable('AmbilPelajaran');
    }
}
