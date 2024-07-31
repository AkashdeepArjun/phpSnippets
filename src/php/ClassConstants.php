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


  
class Test {

  
     const PI=3.146;
      
     private const ADMIN = "AKASH";

    function getPi(){


      echo self::PI;

      echo "<br/>";

    }

     function __construct(){


       echo "admin is </br>";
       echo self::ADMIN;
     }

  
}

$obj= new Test();

$obj->getPi();

echo Test::PI;

     echo "<br/>";

/*echo Test::ADMIN;  WONT WORK VARIABLE IS PRIVATE */

echo "<br/>";

echo $obj->ADMIN;



    ?>

    <h1>Welcome to php tutorial </h1>
  
  </body>
</html>
