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


interface ModA{
    
  public function magic_a();


}

interface ModB{
  
  public function magic_b();

}

class Test implements ModA,ModB{



  public function greet(?string $msg=null){

    snap($msg,__FILE__,__LINE__);


    

  }

  public function magic_a(){}

  public function magic_b(){}

}

$obj = new Test();

$obj->greet();



    ?>

  
  </body>
</html>
