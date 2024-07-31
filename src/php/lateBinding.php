<html lang="en">*/
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

class Base {
      
      
  public static function info(){

        
    echo __CLASS__."<br/>";


  }

  public static function  test(){

        
    self::info(); //when child calls this __CLASS__ tells scope it which it is defined 

    static::info();// this one extends scope of _CLASS__ to calling object  
  }
      

}


class Extended extends Base{
    
  /**/
  /*public  static function info(){*/
  /**/
  /*    echo __CLASS__."<br/>";*/
  /**/
  /**/
  /**/
  /*}*/



}

Extended::test();

    ?>

  
  </body>
</html>
