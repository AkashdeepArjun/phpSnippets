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

      trait Module {

        function init(){print_r("say_hi<br/>");}
        abstract function logic();
      }

      class Test{

      use Module;
      



      
  }

      $test  = new Test();

      $test->init();

      $test->logic();






    ?>

  
  </body>
</html>
