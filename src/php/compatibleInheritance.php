<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
      </head>
  <body>
<?php 
error_reporting(E_ALL);
ini_set("display_errors",true);


class Base {

  function logic($a=5){

    echo "value is {$a}";
  }


}


/*WONT WORK SINCE PARENT CLASS HAVE FUNCTION WITH PARAMETER*/

/*class VerA extends Base {*/
/**/
/*  function logic(){*/
/**/
/*    echo "<br/> child logic ";  }*/
/*}*/
/**/


/*WONT WORK EITHER SINCE PARENT HAVE OPTIONAL PARAMETER  AND THIS ONE HAVE MANDATRY*/

    
class VerB extends Base{

  
  function logic($c){

    echo "<br/> c is {$c}";
  }


}


    ?>

    <h1>Welcome to php tutorial </h1>
  
  </body>
</html>
