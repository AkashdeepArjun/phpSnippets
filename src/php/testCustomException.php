<html> 
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
      </head>
  <body>
<?php 
error_reporting(E_ALL);
ini_set("display_errors",true);


require_once "./myutils/classes/c1.php";

class FkgBug extends Bug{

}

    function test(){
  
      try {


        throw new FkgBug("deadpool 3");

      } catch (FkgBug $e) {
        echo " Bug Exception <br/>".$e->getMessage();
      }catch(Exception $exc){

          
        echo "<br/>".$exc->getMessage();


      }


      /*public function getTraceAsString(){}*/



    }

test();





    ?>

  
  </body>
</html>
