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
      trait shared_lib{

        
        function logic_a(){

          
          snap(" logic A from trait",__METHOD__,__LINE__);


      }
        
      function logic_b(){

      
          snap("logic B from tait",__METHOD__,__LINE__);


      }

      }

      class Module{
    
  
      function logic_module(){
      
        
        snap("logic module from Module",__METHOD__,__LINE__);
          
      }

      }

      class Project extends Module{

          
      use shared_lib; 
      
      function logic_module(){

        snap("logic within Project ",__METHOD__,__LINE__);
        
      }


      }


      $obj = new Project();

      $obj->logic_module();
      $obj->logic_a();
      $obj->logic_b();





      






    ?>

  
  </body>
</html>
