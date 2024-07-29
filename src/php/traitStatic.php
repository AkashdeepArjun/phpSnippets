  <body>
<?php 
error_reporting(E_ALL);
ini_set("display_errors",true);

require_once './utils.php';

        //PHP 8.1.0 STATIC INSIDE TRAIT NOT ALLOWD
      trait Module {

  
    function logic(){

      static $trail=0;
      
      $trail+=1;

    print_r($trail);

    print_r("<br/>"); 

    }
    


    }

    

    class ModA {

    use Module;
    }


    class ModB{


    use Module;
    }


      
    $mod_a = new ModA();

    $mod_b=new ModB();

    $mod_a->logic();

    $mod_b->logic();




    ?>

  
  </body>
</html>
