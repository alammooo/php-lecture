<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./styles/simple.css">
  <title>PHP Kurs</title>

  <style>
    form {
      display: flex;
      flex-direction: column;
    }
  </style>
</head>

<body>

  <?php
  $cities = [
    "budapest" => "Budapest (Ungarn)",
    "helsinki" => "Helsinki (Finnland)",
    "london" => "London (England)"
  ];

  var_dump($cities);
  ?>


  <form action="index.php" method="GET">
    <label for="city">Bitte wählen Sie die Stadt aus:</label>
    <select name="city" id="city">
      <option value="budapest" <?php if (!empty($_GET["city"]) && $_GET["city"] === 'budapest') echo "selected"; ?>>Budapest (Ungarn)</option>
      <option value="helsinki" <?php if (!empty($_GET["city"]) && $_GET["city"] === 'helsinki') echo "selected"; ?>>Helsinki(Finland)</option>
      <option value="london" <?php if (!empty($_GET["city"]) && $_GET["city"] === 'london') echo "selected"; ?>>London(England)</option>
    </select>

    <input type="submit" value="abschicken">
  </form>
  <hr>

  <?php


  if (!empty($_GET["city"]) && in_array($_GET["city"], $cities)) {
    echo file_get_contents("texts/{$_GET["city"]}.html");
  }
  ?>
</body>

</html>