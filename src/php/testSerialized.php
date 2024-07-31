
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

require_once './Store.php';




$file_content = file_get_contents('warehouses');


$article= unserialize($file_content);


echo $article->get_id();







    ?>

  
  </body>
</html>
