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


      trait modA { function logic(){print_r("<br/>LOGIC FROM TRAIT A");}}

      trait modB { function logic(){print_r("<br/>LOGIC FROM TRAIT B");}}


      class Test {

        use modA,modB;

        


      }

      $test=new Test();

      $test->logic();




    ?>

  
  </body>
</html>
