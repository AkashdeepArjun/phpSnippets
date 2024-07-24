 
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

      
  public readonly string $name="akash";

    
  function __construct(string $name){

  
    $this->name=$name;

  }
    

}

$ob=new Test("ui testing");

echo $ob->name;


// UNCOMMENT TO SEE WHAT HAPPENS I WONT WORK COZ READONLY WONT LET YOU MODIFY
/*$ob->name="backend test";*/
    



    ?>

    <h1>Welcome to php tutorial </h1>
  
  </body>
</html>
