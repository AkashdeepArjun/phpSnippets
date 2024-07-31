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


interface ModuleA{

  public function logic_a();
}

interface ModuleB extends ModuleA{

  public function logic_b();

}
class Test implements ModuleB{
  
  public function logic_b(){

    snap("just testing interface",__FILE__,__LINE__);

  }
  public function logic_a(){


    snap(" logic a from mod a just testing interface",__FILE__,__LINE__);
  }

}

$obj = new Test();

$obj->logic_b();



    ?>

  
  </body>
</html>
