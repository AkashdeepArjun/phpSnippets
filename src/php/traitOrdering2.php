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

require_once './utils.php';

    
      trait defaultMethods{

    
      function logic(){

        snap("this is default logic defined in trait",__METHOD__,__LINE__);
      }


      }


      class Base {

        
      function logic(){
      
        
      snap("this is default method defined in base class",__METHOD__,__LINE__);




      }


      }


      class ModernMode extends Base {
      
        use defaultMethods;

      function logic(){
      
          
        snap("here i overridden methods of both trait and base",__METHOD__,__LINE__);
          

      }




      } 

      $test= new ModernMode();

      $test->logic();




    ?>

  
  </body>
</html>
