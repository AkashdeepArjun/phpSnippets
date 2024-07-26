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

  //PHP 8.1.O LETS YOU PASS OBJECT AS PARAMETER, AS DEFAULT VALUE
class Tool{

  function __construct(){echo "<br/> tool object created";}

}


static $mytool = new Tool();

const const_tool = new Tool();

const CLASS_NAME= "Tool";

function logic($p=new Tool){

  echo "<br/> parameter is <br/>";
  print_r($p);
}

class Test{

  
  function __construct(public $prop = new Tool){
    
    echo "<br/> object is <br/>";
    print_r($prop);
  }


}


$obj = new Test();

logic();




//NOT SUPPORTED ONES 


$test1 = new (CLASS_NAME)();



    ?>

    <h1>Welcome to php tutorial </h1>
  
  </body>
</html>
