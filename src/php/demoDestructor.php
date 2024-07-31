
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

  
class Test{


  function __construct(){

          echo "<br/> object created <br/>";
          
        }


  function __destruct(){

    

      echo "object reference deleted !!!!";



  }
  


}

$obj = new Test();



    ?>

    <h1>Welcome to php tutorial </h1>
  
  </body>
</html>
