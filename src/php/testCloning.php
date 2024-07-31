


  /*<html lang="en">*/
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
      </head>
  <body>
<?php 
error_reporting(E_NOTICE);
ini_set("display_errors",true);

require_once './utils.php';


class Window{

    static $instances=0;
    public $instance_number=0;

    public function __construct(){

    
      $this->instance_number=++self::$instances;
        




    }


    public  function __clone(){


      $this->instance_number=++self::$instances;

    }




}

$obj1= new Window();

$obj2= clone $obj1;


print_r($obj1);

print_r($obj2);


print_r("first object instance $obj1->instance_number");


print_r(" second object instance $obj2->instance_number");





    ?>

  
  </body>
</html>
