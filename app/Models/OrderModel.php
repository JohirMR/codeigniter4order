<?php

namespace App\Models;

use CodeIgniter\Model;

class OrderModel extends Model
{
    protected $table      = 'orders';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'customer_name','customer_mobile','customer_address',
        'class_name','book_name','qty','created_at'
    ];
}
