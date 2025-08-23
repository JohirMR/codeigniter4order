<?php

namespace App\Models;

use CodeIgniter\Model;

class OrderItemModel extends Model
{
    protected $table = 'order_items';
    protected $allowedFields = ['order_id','book_id','qty','unit_price','subtotal'];
    public $timestamps = false;
}
