<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>
</head>

<body>
  <?php

  /*use plans\Greet;*/

  error_reporting(E_ALL);
  ini_set('display_errors', true);

  require_once './myspace.php';

  /*require_once './aliens.php';*/

  $obj = new plans\Greet();

  $obj->sayHi();






  ?>
</body>

</html>
