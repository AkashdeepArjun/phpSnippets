<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
      </head>
  <body>
<?php 
error_reporting(E_ALL);
ini_set("display_errors",true);


spl_autoload_register(function($class_name){


include $class_name.'.php';

  
  });
    

    $obj = new Github();

    $obj2 = new Gitlab();





    ?>

    <h1>Welcome to php tutorial </h1>
  
  </body>
</html>
