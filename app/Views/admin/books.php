<!doctype html><html><head><meta charset="utf-8">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
<title>Books</title></head><body class="p-4">
<h3>Books</h3>
<a class="btn btn-primary mb-3" href="<?= site_url('admin/books/create') ?>">Add Book</a>
<table class="table table-bordered">
<tr><th>ID</th><th>Title</th><th>Slug</th><th>Price</th><th></th></tr>
<?php foreach($books as $b): ?>
<tr>
  <td><?= $b['id'] ?></td>
  <td><?= esc($b['title']) ?></td>
  <td><?= esc($b['slug']) ?></td>
  <td><?= number_format($b['base_price'],2) ?></td>
  <td><a class="btn btn-sm btn-secondary" href="<?= site_url('admin/books/edit/'.$b['id']) ?>">Edit</a></td>
</tr>
<?php endforeach; ?>
</table>
</body></html>
