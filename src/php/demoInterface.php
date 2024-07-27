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

require_once "./utils.php";


interface Api{

  function getRequest($type); 



}


class DeveloperGoogle implements Api{

  
  public function getRequest($type){


      /*snap("you got request ");*/ 
      snap("request type is {$type} ",__FILE__,__LINE__);
  }


  public function sayHi(){
    
    snap("hello from sayhi function",__METHOD__,__LINE__);

  }


}

$obj = new DeveloperGoogle();


$obj->getRequest("POST");


    ?>

  
  </body>
</html>
