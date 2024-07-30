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

require_once './utils.php';


class Test{

    public $info = "default";

}

$obj = new Test();

$obj_copy=$obj;


$obj_copy->info="new info overridden old one<br/>";


print_r($obj->info);

$obj_ref=&$obj;

$obj_ref->info="another one updation lol<br/>";





print_r($obj->info);

    ?>

  
  </body>
</html>
