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
  
  
    //PHP VERSION 8.0  ADDED SUPPORT FOR SHORT HAND NOTATION 


class Test{



      
  function __construct(protected $name="akash",protected $role="full stack developer"){


      }


}


class Extended extends Test{
  

  function __construct(){
      

      echo parent::$name;

      echo parent::$role;




    }

 
}


$obj = new Extended();

/*echo $obj->name;*/
  
    



    ?>

    <h1>Welcome to php tutorial </h1>
  
  </body>
</html>
