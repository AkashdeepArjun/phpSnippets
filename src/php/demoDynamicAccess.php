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

class Test{

    
  public function __construct(){

    echo __METHOD__.",<br/>";
  }


}

function logic(){

  
  echo __FUNCTION__."<br/>";

}

$class_ref='Test';
$fun_ref='logic';

$obj = new $class_ref;

$fun_ref();




    ?>

  
  </body>
</html>
