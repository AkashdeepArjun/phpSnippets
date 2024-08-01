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


interface Customize{

  
  function changeBg();

}

trait Decorate{

  function flowerise(){


    echo "<br/> look area is flowerised";

  }
}

enum Room implements Customize{

  use Decorate;

  case STUDY;
  case GUEST;
  
  function changeBg(){


    print "<br/> oh my gawwwd i changed background of walls";
  }





}

Room::GUEST->flowerise();

Room::STUDY->changeBg();





    ?>

  
  </body>
</html>
