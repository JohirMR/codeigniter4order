<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class EmailTestController extends BaseController
{
    public function index()
        {
            $email = \Config\Services::email();

            // Config/Email.php এর সেটিংস ব্যবহার করবে
            $email->setFrom('johir@pixelbuildbd.com', 'Johir Test'); // নিজের ইমেইল
            $email->setTo('johirulislam6442@gmail.com');   // যে ইমেইলে টেস্ট পাঠাবে

            $email->setSubject('Test Email from CodeIgniter 4');
            $email->setMessage('<h2>Test Mail</h2><p>This is a test email from your CI4 project.</p>');

            if ($email->send()) {
                return "✅ টেস্ট ইমেইল সফলভাবে পাঠানো হয়েছে!";
            } else {
                $debugData = $email->printDebugger(['headers','subject','body']);
                return "❌ মেইল পাঠানো যায়নি। Debug Info: <br><pre>" . $debugData . "</pre>";
            }
        }
}
