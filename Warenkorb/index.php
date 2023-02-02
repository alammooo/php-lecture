<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" type="text/css" href="./styles/simple.css">
  <title>PHP-Kurs</title>
</head>

<body>
  <?php

  $shoppingCart = [
    'Apfel',
    'Orange',
    'Banane',
    'Yoghurt',
    'Brot'
  ];

  var_dump($shoppingCart)

  ?>
  <?php if (!empty($shoppingCart)) : ?>
    <ul>
      <?php foreach ($shoppingCart as $item) :  ?>
        <li><?php echo $item; ?></li>
      <?php endforeach; ?>
    </ul>
  <?php else : ?>
    <p>Der Warenkorb ist leer</p>
  <?php endif; ?>

</body>

</html>