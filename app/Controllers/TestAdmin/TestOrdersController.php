<?php

namespace App\Controllers\TestAdmin;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\OrderModel;
use App\Models\OrderItemModel;
use App\Models\BookModel;

class TestOrdersController extends BaseController
{
 public function index()
    {
        $orders = (new OrderModel())->orderBy('id','DESC')->findAll();
        return view('admin/orders', ['orders'=>$orders]);
    }
}
