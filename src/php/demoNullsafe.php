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


class ProcessInfo{
    
      public ?string $id=null;


      function set_id(string $new_id){

        $this->id = $new_id;
      }


      function get_id(){

         return $this->id;
      }
    
}

$obj = new ProcessInfo();


/*$obj->set_id(null);*/

$obj->set_id("a364");
$res=$obj->get_id()?"VALUE EXIST":"NULL VALUE LOL";

print_r($res);




    ?>

    <h1>Welcome to php tutorial </h1>
  
  </body>
</html>
