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

  /*PHP VERSION >=7.40 SUPPORTS TYPE DECLARATIONS */
class Developer {

      public ?string $front_end;

      public int $id;

      


    public function __construct(int $id,?string $front_end){

        $this->id=$id;
        $this->front_end=$front_end;


    }
    
}


$obj = new Developer(25,null);

echo $obj->front_end;

echo $obj->id;


var_dump($obj);

    ?>

    <h1>Welcome to php tutorial </h1>
  
  </body>
</html>
