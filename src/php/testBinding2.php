<html lang="en">*/
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


class Base {

  private   function info(){

      
    echo __CLASS__."<br/>";

  }

  public function  testScope(){
    
      
    $this->info(); 
    
    static::info();

  }



}


class ModA extends Base{

  private  function info(){


    echo __CLASS__."<br/>";


  }
   /**/
   /* function testScope(){*/
   /**/
   /*   parent::testScope();*/
   /**/
   /*}*/


}


$test = new ModA();

$test->testScope();









    ?>

  
  </body>
</html>
