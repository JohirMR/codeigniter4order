<?php

namespace App\Models;

use CodeIgniter\Model;

class OrderModel extends Model
{
     protected $table = 'orders';
    protected $allowedFields = ['customer_name','customer_mobile','customer_address'];
    protected $useTimestamps = true;
}
