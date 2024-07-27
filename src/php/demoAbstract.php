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

require_once './utils.php';


abstract class Android{


  abstract protected function basicFeatures();


  public function getFeatures(){

      echo "<br/>";
      print_r($this->basicFeatures());

  } 



}

class GooglePixel extends Android{

  protected function basicFeatures(?string $n ="akash"){

    return array("calling","screen touch");  }


}

$obj = new GooglePixel();

/*$obj->getFeatures();*/

snap($obj);



    ?>

  
  </body>
</html>
