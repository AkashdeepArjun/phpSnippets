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

    
class BaseConfig {

  const THEME_SETUP= 'dark night';

  protected function guide(){

    
    echo "<br/> step-1... <br/> step-2...<br/> step-3...";

  }


}

class Config_One extends BaseConfig{
  
  public static $plugins ='react next typescript';
  
    public static function getConfig(){

    echo parent::THEME_SETUP."\n";

    echo self::$plugins."\n";

    /*parent::guide();    //WONT WORK  SINCE NON STATICALY CAN NOT ACCESSED IN STATIC CONTEXT*/
    }


  public function getInfo(){

      parent::guide();
      echo "<br/> just a child method is invoked <br/>";

    }


}



    //TEST BaseConfig

$class_nick_name='BaseConfig';
echo "<br/> SCOPE RESOLUTION SAMPLE </br>";
echo $class_nick_name::THEME_SETUP;


$class_alias ='Config_One';

$class_alias::getConfig();

echo " way 2 "."\n";

Config_One::getConfig();


$obj = new Config_One();

$obj->getInfo();


    ?>

  
  </body>
</html>
