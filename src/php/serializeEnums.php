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


$ser_obj = serialize(Directions::TOP);


$orig = unserialize($ser_obj);

print $ser_obj;

print $orig->name;

/*logic('Directions::LEFT');  //WONT WORK SINCE ITS A STRING*/


    ?>

  
  </body>
</html>
