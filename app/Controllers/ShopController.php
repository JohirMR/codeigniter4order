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

    // public function submit()
    // {
    //     $post = $this->request->getPost();

    //     $rules = [
    //         'customer_name'  => 'required|min_length[2]',
    //         'customer_email' => 'required|valid_email',
    //         'items'          => 'required',
    //         'items.*'        => 'is_natural_no_zero'
    //     ];
    //     if (! $this->validate($rules)) {
    //         return redirect()->back()->with('error', 'Invalid form')->withInput();
    //     }


    public function submit()
{
    $db = db_connect();

    $name    = $this->request->getPost('customer_name');
    $mobile  = $this->request->getPost('customer_mobile');
    $address = $this->request->getPost('customer_address');
    $items   = $this->request->getPost('items');

    // total হিসাব
    $total = 0;
    foreach($items as $book_id => $qty) {
        if($qty > 0) {
            $book = $db->table('books')->where('id', $book_id)->get()->getRow();
            $total += $book->price * $qty;
        }

            // save order
    $db->table('orders')->insert([
        'customer_name'    => $name,
        'customer_mobile'  => $mobile,
        'customer_address' => $address,
        'total_price'      => $total,
        'created_at'       => date('Y-m-d H:i:s'),
    ]);
    $order_id = $db->insertID();

    // save order items
    foreach($items as $book_id => $qty) {
        if($qty > 0) {
            $book = $db->table('books')->where('id', $book_id)->get()->getRow();
            $db->table('order_items')->insert([
                'order_id' => $order_id,
                'book_id'  => $book_id,
                'quantity' => $qty,
                'price'    => $book->price,
            ]);
        }
    }

    return redirect()->to('/thank-you');
    }



        $items = $post['items']; // items[book_id] = qty
        $bookModel = new BookModel();
        $orderModel = new OrderModel();
        $orderItemModel = new OrderItemModel();

        $totalQty = 0; $totalAmount = 0.00;
        $lineItems = [];

        foreach ($items as $bookId => $qty) {
            $qty = (int)$qty;
            if ($qty <= 0) continue;

            $book = $bookModel->find($bookId);
            if (!$book) continue;

            $unit = $this->unitPriceWithDiscount((float)$book['base_price'], $qty);
            $sub  = $unit * $qty;

            $totalQty += $qty;
            $totalAmount += $sub;

            $lineItems[] = [
                'book_id'    => $bookId,
                'title'      => $book['title'],
                'qty'        => $qty,
                'unit_price' => $unit,
                'subtotal'   => $sub,
            ];
        }

        if ($totalQty === 0) {
            return redirect()->back()->with('error','কমপক্ষে ১টা বই সিলেক্ট করুন।');
        }

        // Save order
        $orderId = $orderModel->insert([
            'customer_name'  => $post['customer_name'],
            'customer_email' => $post['customer_email'],
            'total_qty'      => $totalQty,
            'total_amount'   => $totalAmount,
        ]);

        foreach ($lineItems as $li) {
            $orderItemModel->insert([
                'order_id'   => $orderId,
                'book_id'    => $li['book_id'],
                'qty'        => $li['qty'],
                'unit_price' => $li['unit_price'],
                'subtotal'   => $li['subtotal'],
            ]);
        }

        // Send email (customer + admin)
        $this->sendOrderEmail($post['customer_email'], $post['customer_name'], $lineItems, $totalAmount, $totalQty);
        $this->sendOrderEmail(setting('Email.fromEmail'), 'Admin', $lineItems, $totalAmount, $totalQty, true);

        return view('shop/success', [
            'order_id'=>$orderId,
            'total'=>$totalAmount,
            'qty'=>$totalQty
        ]);
    }

    private function sendOrderEmail($to, $name, $items, $total, $qty, $isAdmin=false)
    {
        $email = Services::email();
        $email->setTo($to);
        $email->setSubject($isAdmin ? 'New Order Received' : 'Your Order Confirmation');

        $rows='';
        foreach ($items as $i) {
            $rows .= "{$i['title']} — {$i['qty']} x {$i['unit_price']} = {$i['subtotal']}\n";
        }

        $body = "প্রিয় {$name},\n\nআপনার অর্ডারের বিস্তারিত:\n{$rows}\nমোট বই: {$qty}\nমোট মূল্য: {$total} টাকা।\n";
        $email->setMessage(nl2br($body));
        @$email->send();
    }
}
