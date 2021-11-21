<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class RecordPertemuan extends Migration
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
            'pertemuan_id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'null' => false,
            ],
            'waktu_mulai' => [
                'type' => 'DATETIME',
                'null' => false,
            ],
            'waktu_selesai' => [
                'type' => 'DATETIME',
                'null' => false,
            ],
            'waktu_bergabung' => [
                'type' => 'DATETIME',
                'null' => false,
            ],
            'keterangan_id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'null' => false,
            ]
        ];


        $this->forge->addField($fields);
        $this->forge->addPrimaryKey('id');
        $this->forge->addForeignKey('siswa_id', 'Users', 'id');
        $this->forge->addForeignKey('pertemuan_id', 'Pertemuan', 'id');
        $this->forge->addForeignKey('keterangan_id', 'Keterangan', 'id');
        $this->forge->createTable('RecordPertemuan');
        $this->db->enableForeignKeyChecks();
    }

    public function down()
    {
        $this->forge->dropTable('RecordPertemuan');
    }
}
