  <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
      </head>
  <body>
<?php 
error_reporting(E_ALL);
ini_set("display_errors",true);

  
class Android {
  
  public $source='android open source';

   public static $code_base="<br/> android code base </br>";


  public $potato = <<<EOD

hello there

EOD;


  public $potato_quoted =<<<'EOD'

  lmfao 
    what happened 

  EOD;

  public static function getCodeBase(){

    echo self::$code_base;
  }


  //WONT WORK PHP DOES NOT SUPPORT THIS WAY OF VARIABLE USAGE
  //
  /*public $logic =self::getCodeBase();*/


} 

$obj = new Android();

echo "now fetching static method <br/>";

$obj->getCodeBase();

 /*USING CLOSURE PROPERTY TO MAKE STATIC FUNCTION ANON*/
$priv_stat = Android::getCodeBase(...);

$priv_stat();


/*$obj->logic();*/

echo $obj->potato;

$obj->potato=<<<EOD

look i modified potato<br/> 

EOD;

echo $obj->potato;

echo $obj->potato_quoted;






    ?>

   
  
  </body>
</html>
