  /*<html lang="en">*/

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
  </head>

  <body>
    <?php
    error_reporting(E_ALL);
    ini_set("display_errors", true);

    require_once './utils.php';


    interface ModA
    {


      const A = 'module A constant';
    }
    interface ModB
    {


      const B = 'module B constant';
    }

    //PHP VERSION >=8.1.0
    class Test implements ModA
    {


      const A = 'potato';
    }

    print_r(ModA::A);


    print_r("<br/>" . Test::A);


    ?>


  </body>

  </html>
