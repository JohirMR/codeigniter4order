<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php foreach($classes as $class): ?>
    <h3><?= esc($class['name']) ?></h3>
    <ul>
        <?php foreach($books[$class['id']] as $book): ?>
            <li><?= esc($book['name']) ?> - <?= $book['price'] ?> টাকা</li>
        <?php endforeach; ?>
    </ul>
<?php endforeach; ?>
</body>
</html>