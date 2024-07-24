<<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
      </head>
  <body>


    <h1>Welcome to php tutorial </h1>


    <?php
      
    class TestAnonymous{

        public $logic;
    
      
       function __construct() {
            
        
      
          $this->logic=function(){

      echo "<br/> hello Mr akashdeep welcome to stakc development";
};
}


    }

    $obj= new TestAnonymous();
    ($obj->logic)();


?>
  
  </body>
</html>
