<!DOCTYPE html>
<html>
<head>
    <title>Thank You</title>
</head>
<body>
    <h1>ধন্যবাদ!</h1>

    <?php if(session()->getFlashdata('success')): ?>
        <p style="color: green;">
            <?= session()->getFlashdata('success') ?>
        </p>
    <?php endif; ?>

    <p>আপনার অর্ডার সফলভাবে সম্পন্ন হয়েছে।</p>
</body>
</html>
