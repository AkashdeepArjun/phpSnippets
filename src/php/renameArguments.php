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

    
class Base{

  function logic($v1,$v2){

      
      }
    

}

class Child extends Base {


  function logic($c,$d){

    echo "<br/> c:{$c} d:{$d}";
    }
    
}
  

$obj = new Child();

$obj->logic(v1:"akashdeep",v2:"engineer");



    ?>

    <h1>Welcome to php tutorial </h1>
  
  </body>
</html>
