<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateBooks extends Migration
{
public function up()
{
    $this->forge->addField([
        'id'         => ['type'=>'INT','auto_increment'=>true],
        'class_id'   => ['type'=>'INT'],
        'name'       => ['type'=>'VARCHAR','constraint'=>100, 'null'=>false],
        'slug'       => ['type'=>'VARCHAR','constraint'=>100,'unique'=>true],
        'price'      => ['type'=>'DECIMAL','constraint'=>'10,2', 'null'=>false],
        'image'      => ['type'=>'VARCHAR','constraint'=>255,'null'=>true],
        'created_at' => ['type'=>'DATETIME','null'=>true],
        'updated_at' => ['type'=>'DATETIME','null'=>true],
    ]);
    $this->forge->addKey('id', true);
    $this->forge->addForeignKey('class_id', 'classes', 'id', 'CASCADE', 'CASCADE');

    $this->forge->createTable('books');
}
public function down(){ $this->forge->dropTable('books'); }
//
    
}
