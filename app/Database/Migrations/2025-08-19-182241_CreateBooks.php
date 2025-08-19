<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateBooks extends Migration
{
public function up()
{
    $this->forge->addField([
        'id'         => ['type'=>'INT','auto_increment'=>true],
        'title'      => ['type'=>'VARCHAR','constraint'=>200],
        'slug'       => ['type'=>'VARCHAR','constraint'=>200,'unique'=>true],
        'base_price' => ['type'=>'DECIMAL','constraint'=>'10,2','default'=>'50.00'],
        'created_at' => ['type'=>'DATETIME','null'=>true],
        'updated_at' => ['type'=>'DATETIME','null'=>true],
    ]);
    $this->forge->addKey('id', true);
    $this->forge->createTable('books');
}
public function down(){ $this->forge->dropTable('books'); }
//
    
}
