
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

enum Connection:int implements Connectivity{

  case CONNECTED=1;
  case DISCONNECTED=-1;
  case WAITING=2;
  case FAILED_TO_CONNECT=-2;

  public  function checkStatus():string{

  
    return match($this){
  
      Connection::DISCONNECTED,Connection::FAILED_TO_CONNECT=>'Connection could not be established',
      Connection::WAITING=>'connection is under progress',
      Connection::CONNECTED=>'connection success!!!'


    };

  }

}

print Connection::CONNECTED->checkStatus();

print "<br/>";

print Connection::tryFrom(2)->name;



    ?>

  
  </body>
</html>
