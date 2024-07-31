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


    trait Configs{

        public static $theme="solarized dark";

    }

    class Test{

      use Configs;

    }

    print_r(Test::$theme);



    ?>

  
  </body>
</html>
