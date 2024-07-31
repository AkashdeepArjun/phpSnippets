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

    trait MySettings{
      
    public const DB_LINK="potatoes.com";

    final public const FIXED_LINK="localhost";

    }

    class Test{

      use MySettings;

       //public const DB_LINK="resengan";
        
      final public const FIXED_LINK="w3schools.com";
    }

    $obj =new Test();
    print_r($obj::FIXED_LINK);




    ?>

  
  </body>
</html>
