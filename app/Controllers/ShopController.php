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

//         $orderDetails = ""; // মেইল-এর জন্য

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

//                 // মেইল-এর জন্য বিস্তারিত যোগ করা
//                 $orderDetails .= "Class: {$book['class_name']}, Book: {$book['name']}, Qty: {$qty}\n";
//             }
//         }

// //         // Email পাঠানোর সেটআপ
// //         $email = \Config\Services::email();

// //         $email->setFrom('johir.pixelbuildbd.com', 'Your Shop Name'); // পরিবর্তন করো নিজের ইমেইল দিয়ে
// //         $email->setTo('johirulislam6442@gmail.com'); // যে ইমেইলে পাঠাতে চাও

// //         $email->setSubject('New Order Received');



// //         $emailMessage = "নতুন অর্ডার এসেছে:\n\n";
//         //$emailMessage .= "Customer Name: {$customerData['customer_name']}\n";
// //         $emailMessage .= "Mobile: {$customerData['customer_mobile']}\n";
// //         $emailMessage .= "Address: {$customerData['customer_address']}\n\n";
// //         $emailMessage .= "Ordered Items:\n{$orderDetails}";

// //         $email->setMessage($emailMessage);

// //         if($email->send()){
// //     return redirect()->to('/thank-you')->with('success', 'অর্ডার সম্পন্ন হয়েছে এবং মেইল পাঠানো হয়েছে!');
// // } else {
// //     // $data = $email->printDebugger(['headers']);
// //     // return redirect()->to('/error')->with('error', 'অর্ডার সম্পন্ন হয়েছে কিন্তু মেইল পাঠানো যায়নি। Debug info: ' . $data);
// //      // Debug তথ্য string আকারে আসবে
// //     $debugData = $email->printDebugger(['headers','subject','body']);
// //     return redirect()->to('/error')
// //                      ->with('error', 'অর্ডার সম্পন্ন হয়েছে কিন্তু মেইল পাঠানো যায়নি। Debug Info: ' . $debugData);
// // }

// //     }


//  $email = \Config\Services::email();

//             // Config/Email.php এর সেটিংস ব্যবহার করবে
//             $email->setFrom('johir@pixelbuildbd.com', 'Johir Test'); // নিজের ইমেইল
//             $email->setTo('johirulislam6442@gmail.com');   // যে ইমেইলে টেস্ট পাঠাবে

//             $email->setSubject('Test Email from CodeIgniter 4');
//             $email->setMessage("   <h2>Test Mail  Customer Name:" .$customerData['customer_name'] ."</h2><p>This is a test email from your CI4 project.</p>");

//             if ($email->send()) {
//                 return "✅ টেস্ট ইমেইল সফলভাবে পাঠানো হয়েছে!";
//             } else {
//                 $debugData = $email->printDebugger(['headers','subject','body']);
//                 return "❌ মেইল পাঠানো যায়নি। Debug Info: <br><pre>" . $debugData . "</pre>";
//             }
//         }








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

    // ক্লাস অনুযায়ী ডেটা রাখার জন্য
    $groupedOrders = [];

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

            // Group করে রাখছি
            $groupedOrders[$book['class_name']][] = [
                'book_name' => $book['name'],
                'qty'       => $qty,
                'price'     => $book['price'],
            ];
        }
    }

<<<<<<< HEAD
    // HTML Table আকারে মেইলের জন্য তৈরি করা
    $orderDetails = "";
    foreach($groupedOrders as $className => $books) {
        $orderDetails .= "<h4 style='margin-top:15px;'>📚 {$className}</h4>";
        $orderDetails .= "<table border='1' cellpadding='6' cellspacing='0' width='100%' style='border-collapse:collapse;margin-bottom:15px;'>
                            <tr style='background:#f2f2f2;'>
                                <th align='left'>Book</th>
                                <th align='center'>Qty</th>
                                <th align='right'>Price</th>
                                <th align='right'>Subtotal</th>
                            </tr>";
        $classTotal = 0;
        foreach($books as $b) {
            $subtotal = $b['qty'] * $b['price'];
            $classTotal += $subtotal;
            $orderDetails .= "<tr>
                                <td>{$b['book_name']}</td>
                                <td align='center'>{$b['qty']}</td>
                                <td align='right'>" . number_format($b['price'],2) . "</td>
                                <td align='right'>" . number_format($subtotal,2) . "</td>
                              </tr>";
=======
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
>>>>>>> 19759ed3e4a0e958fcf12bceef127054396712e6
        }
        $orderDetails .= "<tr style='font-weight:bold;background:#f9f9f9;'>
                            <td colspan='3' align='right'>Class Total</td>
                            <td align='right'>" . number_format($classTotal,2) . "</td>
                          </tr>";
        $orderDetails .= "</table>";
    }

    // ইমেইল পাঠানো
    $email = \Config\Services::email();
    $email->setFrom('johir@pixelbuildbd.com', 'Your Shop Name');
    $email->setTo('johirulislam6442@gmail.com');
    $email->setSubject('New Order Received '.$customerData['customer_name']);

    $emailMessage = "
    <h2>🛒 নতুন অর্ডার এসেছে</h2>
    <p><strong>Customer Name:</strong> {$customerData['customer_name']}</p>
    <p><strong>Mobile:</strong> {$customerData['customer_mobile']}</p>
    <p><strong>Address:</strong> {$customerData['customer_address']}</p>
    {$orderDetails}
    <p style='font-size:12px;color:#777;'>এই মেইলটি সিস্টেম থেকে অটোমেটিক পাঠানো হয়েছে।</p>
    ";

    $email->setMessage($emailMessage);

    if($email->send()){
        return redirect()->to('/thank-you')->with('success', 'অর্ডার সম্পন্ন হয়েছে এবং মেইল পাঠানো হয়েছে!');
    } else {
        $debugData = $email->printDebugger(['headers','subject','body']);
        return redirect()->to('/error')
                        ->with('error', 'অর্ডার সম্পন্ন হয়েছে কিন্তু মেইল পাঠানো যায়নি। Debug Info: ' . $debugData);
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
