
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


enum Directions{


case LEFT;
case RIGHT;
case TOP;
case BOTTOME;




}

$a=Directions::cases();

  

foreach($a as $vars){

  echo $vars->name."<br/>";

  echo "hello";

}




    ?>

  
  </body>
</html>
