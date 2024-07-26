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

      
        protected string $info;

        protected string $search_history;

        
        function __construct(string $info="potato",string $sh="brazzers hamster"){
          
        
            $this->info=$info;
            $this->search_history=$sh;

        }
    

      }

  
  new Base();       //  without arguments

  new Base("whatever lol");



    ?>

    <h1>Welcome to php tutorial </h1>
  
  </body>
</html>
