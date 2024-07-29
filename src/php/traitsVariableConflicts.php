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

    
    trait Configs {
    
      public $fg ="white";

    public $bg="orange";

    public $font="awesome";

    }

    class CustomTheme{
      
    use Configs;

    public $bg="orange";

    readonly protected string $font;
    

    }





    ?>

  
  </body>
</html>
