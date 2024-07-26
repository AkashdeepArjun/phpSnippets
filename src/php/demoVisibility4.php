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


class Test{

      private $secret='secret bhau bhau';

      protected =$protected_info ='protected bhau bhau';


      public function bark(){

        echo "<br/> PUBLIC bhau bhau </br> ";
      }  

      private function meaw(){

        echo "<br/> PRIVATE FUNCTION MEAW ";
      }


      protected  function hiss(){

        echo "<br/> look i am Xenomorh be scared";
      }


      public function peekOther(Test $target){
          
            




      } 

    }
    



    ?>

    <h1>Welcome to php tutorial </h1>
  
  </body>
</html>
