
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


enum Connection {

case DISCONNECTED;

case CONNECTED;

case LOADING;

case FAILED;

}

$state1= Connection::FAILED;

$state2=Connection::FAILED;

$res=$state1==$state2;

echo "result is ".$res;

print Connection::LOADING->name

    ?>

  
  </body>
</html>
