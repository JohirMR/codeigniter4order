<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Error</title>
    <style>
        body { font-family: Arial, sans-serif; background: #fff0f0; text-align: center; padding: 50px; }
        h1 { color: #c00000; }
        p { font-size: 18px; }
        .message { margin-top: 20px; color: red; font-weight: bold; }
        pre { text-align: left; display: inline-block; background: #ffe6e6; padding: 15px; border-radius: 5px; }
    </style>
</head>
<body>
    <h1>ত্রুটি!</h1>

    <?php if(session()->getFlashdata('error')): ?>
        <div class="message">
            <pre><?= session()->getFlashdata('error') ?></pre>
        </div>
    <?php endif; ?>

    <p>দুঃখিত, আপনার অর্ডার সম্পন্ন হলেও মেইল পাঠানো যায়নি।</p>
    <p><a href="<?= site_url('/') ?>">হোমে ফিরে যান</a></p>
</body>
</html>
