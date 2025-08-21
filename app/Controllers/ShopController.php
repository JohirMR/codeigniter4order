<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\BookModel;
use App\Models\OrderModel;
use App\Models\OrderItemModel;
use Config\Services;

class ShopController extends BaseController
{
    public function index()
    {
        $books = (new BookModel())->findAll();
        return view('shop/index', ['books'=>$books]);
    }
}
