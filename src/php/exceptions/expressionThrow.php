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




try {

  test();
  
} catch (Exception $th) {
  echo "<br/>".$th->getMessage();
}

function test(){

  
  do_something() or throw new Exception("looks like buggy logic here ");

    //Exception FIRES WHEN FUNCTION GETS CALLED 

}

function do_something(){

  /*echo "<br/> This is just getting out of control <br/>";*/

  return -1;
}



    ?>

  
  </body>
</html>
