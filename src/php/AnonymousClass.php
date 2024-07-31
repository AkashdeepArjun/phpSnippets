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

require_once './utils.php';


    
class Logger{

  
  function log($msg){

    echo "<br/> {$msg}";
  }


}

interface Logging {

  function takeLog();
}




class Server {
  
  private Logger $lgr;

  /*private Logger2 $abs_logger*/

   function setLogger(Logger $logger){

     $this->lgr=$logger;
   }

   function getLog($msg){

     ($this->lgr)->log("hello there welcome to server initiated");
   }



   function setupLogging(Logging $lg){

     $lg->takeLog();
   } 


}

$my_server = new Server();

$my_server->setLogger(new Logger()); //NEW CLASS


$my_server->setupLogging(new class implements Logging{


  function takeLog(){

    echo"<br/><h1> Anonymous classs understood <br/><h1/>";
  }


} );

$my_server->getLog("Hi there");



    ?>

  
  </body>
</html>
