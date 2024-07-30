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



		 class Base {

       public $public_prop ="Akashdeep";

       protected $protected_prop="skill set";

       private $private_prop = "income wealth";




        public function iterateMembers(){

         foreach ($this as $key => $value) {

           print_r("$key => $value<br/>");
        
         }
       }


     }


$obj = new Base();


$obj->iterateMembers();


print_r("<br/> priting in global scope <br/>");

foreach ($obj as $key => $value) {
  
           print_r("$key => $value<br/>");
}


    ?>

  
  </body>
</html>
