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
    // মূল দাম-ছাড়ের নিয়ম: প্রতি টাইটেলে qty >= 5 হলে 20% ডিসকাউন্ট
    private function unitPriceWithDiscount(float $base, int $qty): float
    {
        return $qty >= 5 ? round($base * 0.80, 2) : $base;
    }



public function submit()
{
    helper(['form']);
    $db = db_connect();

    // 1. Validation rules
    $rules = [
        'customer_name'    => 'required|min_length[2]',
        'customer_mobile'  => 'required|min_length[10]|max_length[20]',
        'customer_address' => 'required',
        'items'            => 'required',
    ];

    if (! $this->validate($rules)) {
        return redirect()->back()->with('error', 'অনুগ্রহ করে সব তথ্য সঠিকভাবে দিন')->withInput();
    }

    $orderModel     = new OrderModel();
    $orderItemModel = new OrderItemModel();
    $bookModel      = new BookModel();

    $db->transStart(); // Transaction শুরু

    try {
        // 2. Save order
        $orderId = $orderModel->insert([
            'customer_name'   => $this->request->getPost('customer_name'),
            'customer_mobile' => $this->request->getPost('customer_mobile'),
            'customer_address'=> $this->request->getPost('customer_address'),
        ], true); // true দিলে insert ID return করবে

        // 3. Process items
        $items = $this->request->getPost('items'); // items[book_id] => qty

        foreach ($items as $bookId => $qty) {
            if ($qty > 0) {
                $book = $bookModel->find($bookId);
                if (!$book) continue;

                // Discount rule
                $unitPrice = $this->unitPriceWithDiscount($book['price'], $qty);
                $subtotal  = $qty * $unitPrice;

                $orderItemModel->insert([
                    'order_id'   => $orderId,
                    'book_id'    => $bookId,
                    'class_name' => $book['class_name'],
                    'book_name'  => $book['name'],
                    'qty'        => $qty,
                    'unit_price' => $unitPrice,
                    'subtotal'   => $subtotal,
                ]);
            }
        }

        $db->transComplete(); // Transaction শেষ

        if ($db->transStatus() === false) {
            throw new \Exception('Transaction failed');
        }

        return redirect()->to('/thank-you')->with('message', '✅ অর্ডার সফলভাবে গ্রহণ করা হয়েছে');

    } catch (\Throwable $e) {
        $db->transRollback();
        log_message('error', 'Order Submit Error: ' . $e->getMessage());
        return redirect()->back()->with('error', '❌ অর্ডার ব্যর্থ হয়েছে, আবার চেষ্টা করুন');
    }
}

}
