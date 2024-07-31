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



  public function __construct(

    public readonly string $name="Er. akashdeep wadhwa",


  ){}


}

$obj = new Test();

echo $obj->name;

/*$obj->name="wadhwa saab"*/
      
    



    ?>

    <h1>Welcome to php tutorial </h1>
  
  </body>
</html>
