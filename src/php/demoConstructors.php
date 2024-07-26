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


class Base {



  function __construct(){

    echo "<br/> <h1>Base method initiated </h1> <br/> ";
    }
    
}


class Test{


  function __construct(){


          echo "<br/> <h1>Test class  object created  </h1> <br/> ";


  }
}


class NewGen extends Base{


  

  function __construct(){


    echo "<br/> <h1> Child class object created !!!<br/>";
    parent::__construct();
  }


}


$obj=new Base();

$obj=new Test();

$obj=new NewGen();



    ?>

    <h1>Welcome to php tutorial </h1>
  
  </body>
</html>
