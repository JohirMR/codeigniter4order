<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateOrderItems extends Migration
{
    public function up()
    {
        $this->forge->addField([
        'id'         => ['type'=>'INT','auto_increment'=>true],
        'order_id'   => ['type'=>'INT'],
        'book_id'    => ['type'=>'INT'],
        'qty'        => ['type'=>'INT','default'=>1],
        'unit_price' => ['type'=>'DECIMAL','constraint'=>'10,2','default'=>'0.00'],
        'subtotal'   => ['type'=>'DECIMAL','constraint'=>'10,2','default'=>'0.00'],
    ]);
    $this->forge->addKey('id', true);
    $this->forge->addForeignKey('order_id','orders','id','CASCADE','CASCADE');
    $this->forge->addForeignKey('book_id','books','id','RESTRICT','CASCADE');
    $this->forge->createTable('order_items');
    }

    public function down()
    {
        $this->forge->dropTable('order_items');
    }
}
