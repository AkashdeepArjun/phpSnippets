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
class TestAccess {
    
    public $var_public="<br/>base class public<br/>";

    protected $var_protected="base class protected";

    private $var_private="base class private";



    public function publicService(){

      echo "<br/> oh yeah public method is accesible" ;   }



    protected function protectedService(){

      
      echo "<br/> accesible to child members only <br/>";
        
    }

    private function privateService(){

      echo "<br/> oh my gawwd only accesible here <br/>";
    }



}





$obj = new TestAccess();

//FETCH UPDATE PUBLIC =>WORKS
print_r($obj->var_public);

$obj->var_public="look i updated from global scope";

print_r($obj->var_public);
    


//FETCH UPDATE protected



/*print_r($obj->var_protected); //FATAL */


/*$obj->var_protected="trying to update protected variable";        // FATAL ERROR */


//FETCH UPDATE var_private
//

/*print_r($obj->var_private);     //FATAL ERROR */

/*$obj->var_private="lets update private var";   //FATAL ERROR*/


// METHODS Visibility


$obj->publicService();  // WORKS

/*$obj->protectedService(); //FATAL */


/*$obj->privateService();   //FATAL*/

    ?>

    <h1>Visibility in php </h1>
  
  </body>
</html>
