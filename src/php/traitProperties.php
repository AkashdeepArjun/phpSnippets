*<html lang="en">*/
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


    trait Settings{

    public $auto_complete="blabla";
    }

    class Test {

      use Settings;
      
    }

    $test=new Test();

    print_r($test->auto_complete);


    ?>

  
  </body>
</html>
