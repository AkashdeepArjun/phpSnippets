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

  
class Android{

    
  function manageResource(){

    echo "<br> PARENT CLASS METHOD IMPLEMETATION";
    }
  
    
}


class GooglePixel extends Android{


  
  function manageResource(){

    echo "<br> CHILD CLASS METHOD IMPLEMETATION";
    parent::manageResource();

    }

  



}

$obj = new GooglePixel();
$obj->manageResource();
    



    ?>

    <h1>Welcome to php tutorial </h1>
  
  </body>
</html>
