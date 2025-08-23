<?php

namespace App\Models;

use CodeIgniter\Model;

class BookModel extends Model
{
    protected $table = 'books';
    protected $allowedFields = ['id','name','class_id','price','created_at','updated_at'];
    protected $useTimestamps = true;
}
