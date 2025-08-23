<!doctype html><html><head><meta charset="utf-8">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
<title>Book</title></head><body class="p-4">
<h3><?= isset($book)?'Edit':'Create' ?> Book</h3>
<form method="post">
  <div class="mb-2"><label class="form-label">Title</label>
    <input class="form-control" name="title" value="<?= esc($book['title']??'') ?>"></div>
  <div class="mb-2"><label class="form-label">Slug</label>
    <input class="form-control" name="slug" value="<?= esc($book['slug']??'') ?>"></div>
  <div class="mb-2"><label class="form-label">Base Price</label>
    <input class="form-control" name="base_price" type="number" step="0.01" value="<?= esc($book['base_price']??'50') ?>"></div>
  <button class="btn btn-primary">Save</button>
</form>
</body></html>
