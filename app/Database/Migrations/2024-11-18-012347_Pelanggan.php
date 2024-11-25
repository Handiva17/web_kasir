<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Pelanggan extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_pelanggan'=> [
                'type' => 'INT',
                'constraint' => 11,
                'null' => false,
                'auto_increment' => true
            ],
            'nama_pelanggan'=> [
                'type' => 'VARCHAR',
                'constraint' => 255
            ],
            'alamat_pelanggan'=> [
                'type' => 'TEXT',
            ],
            'no_telp'=> [
                'type' => 'VARCHAR',
                'constraint' => 15
            ],
            'created_at' => [
                'type' => 'DATETIME',
                'null' => TRUE
            ],
            'updated_at' => [
                'type' => 'DATETIME',
                'null' => TRUE
            ],
        ]);

        $this->forge->addPrimaryKey('id_pelanggan', TRUE);
        $this->forge->createTable('pelanggan');
    }

    public function down()
    {
        $this->forge->dropTable('pelanggan');
    }
}
