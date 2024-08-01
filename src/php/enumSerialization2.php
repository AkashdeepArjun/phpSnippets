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


enum Front{
case HTML;
case CSS;
case REACT;


}


enum Back:string{
  
case database ='sql nosql';


}

print_r(Front::HTML);

echo "<br/>";

print_r(Back::database);






    ?>

  
  </body>
</html>
