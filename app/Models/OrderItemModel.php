<?php

namespace App\Models;

use CodeIgniter\Model;

class OrderItemModel extends Model
{
    protected $table = 'order_items';
    protected $allowedFields = ['order_id','book_id','class_name','book_name','qty','unit_price','subtotal'];
    public $timestamps = false;
}
