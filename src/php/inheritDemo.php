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


class CustomDate extends DateTime{
  
    
     // DEPRECIATED AS OF PHP 8.1.0 

  /*public function  modify(string $modifier){return false;}*/


  public function modify(string $modifier):?DateTime{ 
  
    return null;
  
  } 


}


$obj = new CustomDate();
    

print_r($obj->modify("akashdeep"));
   


?> 
  
 <h1>Inheritance sample  </h1>

</body>
</html>
