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

interface Testing {

  function getAccess();
}

class Server {

  private $confidental_data="private data limited to server";


public function setupTesting(){


    return new class implements Testing{

      
      function getAccess(){


        return $this->confidental_data;
      }


    };



  }

}


$obj_test = new Server();


$anon_class = $obj_test->setupTesting();



print_r($anon_class->getAccess());




    ?>

  
  </body>
</html>
