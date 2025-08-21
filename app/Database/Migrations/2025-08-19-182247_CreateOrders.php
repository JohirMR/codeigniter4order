<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateOrders extends Migration
{
    public function up()
    {
         $this->forge->addField([
        'id'            => ['type'=>'INT','auto_increment'=>true],
        'customer_name' => ['type'=>'VARCHAR','constraint'=>120],
        'customer_email'=> ['type'=>'VARCHAR','constraint'=>190],
        'total_qty'     => ['type'=>'INT','default'=>0],
        'total_amount'  => ['type'=>'DECIMAL','constraint'=>'10,2','default'=>'0.00'],
        'created_at'    => ['type'=>'DATETIME','null'=>true],
        'updated_at'    => ['type'=>'DATETIME','null'=>true],
    ]);
    $this->forge->addKey('id', true);
    $this->forge->createTable('orders');
    }

    public function down()
    {
        $this->forge->dropTable('orders');
    }
}
