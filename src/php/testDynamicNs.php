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

require_once './space.php';



$class_ref = "\marvel\Mutants";

$test_obj = new $class_ref; 

$fun_ref = "\marvel\power";

$fun_ref();

echo constant("\marvel\OWNER");

echo " main name space is ".__NAMESPACE__."<br/>";
    ?>

  
  </body>
</html>
