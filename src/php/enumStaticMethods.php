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


public static function fromSign(string $s):static{

  return match($s){
    'l'=>static::LEFT,
    'r'=>static::RIGHT,
    't'=>static::TOP,
    'b'=>static::BOTTOME,
    default =>static::LEFT,
    


  };


}



}


/*logic('Directions::LEFT');  //WONT WORK SINCE ITS A STRING*/

print Directions::fromSign('l')->name;

    ?>

  
  </body>
</html>
