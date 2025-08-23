<?php

namespace App\Models;

use CodeIgniter\Model;

class OrderModel extends Model
{
     protected $table = 'orders';
    protected $allowedFields = ['customer_name','customer_email','total_qty','total_amount'];
    protected $useTimestamps = true;
}
