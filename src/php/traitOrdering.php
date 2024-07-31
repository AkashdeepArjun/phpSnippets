
      
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
  

      class OldModule{


      
      public function sortLogic(){

        print_r("<br/> using insertion sort logic");
      }


      }


      trait SmartPeople{
        
      public function sortLogic(){


      print_r("<br/> using Logn based sort logic Quick sort that is");

      print_r("<br/> now calling default method for sorting");

      parent::sortLogic();
      }


      }

      class NewModule extends OldModule{
    
        use SmartPeople;


      }

      $test = new NewModule();

      $test->sortLogic();




    ?>

  
  </body>
</html>

