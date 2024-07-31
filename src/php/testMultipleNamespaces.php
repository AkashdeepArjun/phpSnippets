


 /*<html lang="en">*/
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
      </head>
  <body>
<?php 
error_reporting(E_ALL);
ini_set("display_errors",true);


require_once './myplanet.php';



$predator = new LV427\Aliens;

$predator->roar();


$xenos= new LV426\Aliens;

$xenos->hiss();



    ?>

  
  </body>
</html>
