 /*<html lang="en">*/
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
      </head>
  <body>
<?php 
error_reporting(E_ALL);
ini_set("display_errors",true);

require_once './utils.php';


class Root{
    
  public static function whoami(){


    echo " Class Scope is ".__CLASS__."<br/>";

    
  }
  
  public static function info(){

    static::whoami();
  }

}



class ModA extends  Root{

    
  public function test(){

      Root::info();
      parent::info();
      self::whoami();
      

  }

  public  static function  whoami(){

echo "Class Scope is ".__CLASS__."<br/>";


  }


}

class Hybrid extends ModA{

  public static function whoami(){

echo "Class Scope is ".__CLASS__."<br/>";


  }
}

$test =new Hybrid();
$test->test();











    ?>

  
  </body>
</html>
