<!doctype html>
<html lang="bn"><head><meta charset="utf-8"><title>অর্ডার সফল</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"></head>
<body class="bg-light">
<div class="container py-5 text-center">
  <h3>অর্ডার সফল! (#<?= esc($order_id) ?>)</h3>
  <p>মোট বই: <strong><?= esc($qty) ?></strong></p>
  <p>মোট মূল্য: <strong><?= number_format($total,2) ?></strong> টাকা</p>
  <a class="btn btn-primary" href="<?= site_url('/') ?>">আরও অর্ডার করুন</a>
</div>
</body></html>
