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

    

interface Connectivity{

  public function checkStatus():string;

}

enum Connection implements Connectivity{

  case CONNECTED;
  case DISCONNECTED;
  case WAITING;
  case FAILED_TO_CONNECT;

  public  function checkStatus():string{

  
    return match($this){
  
      Connection::DISCONNECTED,Connection::FAILED_TO_CONNECT=>'Connection could not be established',
      Connection::WAITING=>'connection is under progress',
      Connection::CONNECTED=>'connection success!!!'


    };

  }

}

print Connection::CONNECTED->checkStatus();




    ?>

  
  </body>
</html>
