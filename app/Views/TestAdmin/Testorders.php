<!doctype html><html><head><meta charset="utf-8">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
<title>Orders</title></head><body class="p-4">
<h3>Orders</h3>
<table class="table table-bordered">
<tr><th>ID</th><th>Customer</th><th>Email</th><th>Total Qty</th><th>Total Amount</th><th>Date</th></tr>
<?php foreach($orders as $o): ?>
<tr>
  <td><?= $o['id'] ?></td>
  <td><?= esc($o['customer_name']) ?></td>
  <td><?= esc($o['customer_email']) ?></td>
  <td><?= $o['total_qty'] ?></td>
  <td><?= number_format($o['total_amount'],2) ?></td>
  <td><?= esc($o['created_at']) ?></td>
</tr>
<?php endforeach; ?>
</table>
</body></html>
