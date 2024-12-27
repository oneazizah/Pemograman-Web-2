<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateProdukTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_sepatu' =>[
                'type' => 'INT',
                'constrain' => 10,
                'auto_increment' => true,
            ],
            'merek' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'ukuran' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'harga' => [
                'type' => 'INT',
                'constraint' => 10,
            ],
            'katalog' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
        ]);

        $this->forge->addKey('id_sepatu', true);
        $this->forge->createTable('products', true);
    }

    public function down()
    {
        $this->forge->dropTable('products');
    }

}  