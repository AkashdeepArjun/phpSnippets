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


enum SmartTv {

  case SMALL;
  case MEDIUM;
  case LARGE;

  public const Huge=self::LARGE;


}

print SmartTv::Huge->name;


/*logic('Directions::LEFT');  //WONT WORK SINCE ITS A STRING*/


    ?>

  
  </body>
</html>
