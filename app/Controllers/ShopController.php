<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\BookModel;
use App\Models\OrderModel;
use Config\Services;

class ShopController extends BaseController
{

     public function index()
    {
        $books = (new BookModel())->findAll();
        return view('shop/index', ['books'=>$books]);
    }

//  public function submit()
//     {
//         $db = db_connect();
//         $orderModel = new OrderModel();
//         $bookModel  = new BookModel();

//         $customerData = [
//             'customer_name'    => $this->request->getPost('customer_name'),
//             'customer_mobile'  => $this->request->getPost('customer_mobile'),
//             'customer_address' => $this->request->getPost('customer_address'),
//         ];

//         $items = $this->request->getPost('items'); // ফর্ম থেকে আসা qty গুলো

//         foreach($items as $bookId => $qty) {
//             if($qty > 0) {
//                 $book = $bookModel->find($bookId);

//                 $data = [
//                     'customer_name'    => $customerData['customer_name'],
//                     'customer_mobile'  => $customerData['customer_mobile'],
//                     'customer_address' => $customerData['customer_address'],
//                     'class_name'       => $book['class_name'],
//                     'book_name'        => $book['name'],
//                     'qty'              => $qty
//                 ];

//                 $orderModel->insert($data);
//             }
//         }

//         return redirect()->to('/')->with('success', 'অর্ডার সম্পন্ন হয়েছে!');
//     }

 public function submit()
    {
        $db = db_connect();
        $orderModel = new OrderModel();
        $bookModel  = new BookModel();

        $customerData = [
            'customer_name'    => $this->request->getPost('customer_name'),
            'customer_mobile'  => $this->request->getPost('customer_mobile'),
            'customer_address' => $this->request->getPost('customer_address'),
        ];

        $items = $this->request->getPost('items'); // ফর্ম থেকে আসা qty গুলো

        $orderDetails = ""; // মেইল-এর জন্য

        foreach($items as $bookId => $qty) {
            if($qty > 0) {
                $book = $bookModel->find($bookId);

                $data = [
                    'customer_name'    => $customerData['customer_name'],
                    'customer_mobile'  => $customerData['customer_mobile'],
                    'customer_address' => $customerData['customer_address'],
                    'class_name'       => $book['class_name'],
                    'book_name'        => $book['name'],
                    'qty'              => $qty
                ];

                $orderModel->insert($data);

                // মেইল-এর জন্য বিস্তারিত যোগ করা
                $orderDetails .= "Class: {$book['class_name']}, Book: {$book['name']}, Qty: {$qty}\n";
            }
        }

//         // Email পাঠানোর সেটআপ
//         $email = \Config\Services::email();

//         $email->setFrom('johir.pixelbuildbd.com', 'Your Shop Name'); // পরিবর্তন করো নিজের ইমেইল দিয়ে
//         $email->setTo('johirulislam6442@gmail.com'); // যে ইমেইলে পাঠাতে চাও

//         $email->setSubject('New Order Received');



//         $emailMessage = "নতুন অর্ডার এসেছে:\n\n";
        //$emailMessage .= "Customer Name: {$customerData['customer_name']}\n";
//         $emailMessage .= "Mobile: {$customerData['customer_mobile']}\n";
//         $emailMessage .= "Address: {$customerData['customer_address']}\n\n";
//         $emailMessage .= "Ordered Items:\n{$orderDetails}";

//         $email->setMessage($emailMessage);

//         if($email->send()){
//     return redirect()->to('/thank-you')->with('success', 'অর্ডার সম্পন্ন হয়েছে এবং মেইল পাঠানো হয়েছে!');
// } else {
//     // $data = $email->printDebugger(['headers']);
//     // return redirect()->to('/error')->with('error', 'অর্ডার সম্পন্ন হয়েছে কিন্তু মেইল পাঠানো যায়নি। Debug info: ' . $data);
//      // Debug তথ্য string আকারে আসবে
//     $debugData = $email->printDebugger(['headers','subject','body']);
//     return redirect()->to('/error')
//                      ->with('error', 'অর্ডার সম্পন্ন হয়েছে কিন্তু মেইল পাঠানো যায়নি। Debug Info: ' . $debugData);
// }

//     }

 $email = \Config\Services::email();

            // Config/Email.php এর সেটিংস ব্যবহার করবে
            $email->setFrom('johir@pixelbuildbd.com', 'Johir Test'); // নিজের ইমেইল
            $email->setTo('johirulislam6442@gmail.com');   // যে ইমেইলে টেস্ট পাঠাবে

            $email->setSubject('Test Email from CodeIgniter 4');
            $email->setMessage("<h2>Customer Name:".$customerData['customer_name']."</h2>
            <h4> Mobile: ".$customerData['customer_mobile']."</h4> <p>Address:".$customerData['customer_address']."</p> <p>Ordered Items:".$orderDetails."</p>");

            if ($email->send()) {
                return redirect()->to('/thank-you')->with( 'success', "✅ টেস্ট ইমেইল সফলভাবে পাঠানো হয়েছে!");
            } else {
                $debugData = $email->printDebugger(['headers','subject','body']);
                return redirect()->to('/error')->with( 'error', "❌ মেইল পাঠানো যায়নি। Debug Info: <br><pre>" . $debugData . "</pre>");
            }
        }

    public function thankYou()
{
    // ভিউ-তে session থেকে success মেসেজ পাঠানো হবে
    return view('thank_you');
}

public function errorPage()
{
    return view('error_page');
}

}
