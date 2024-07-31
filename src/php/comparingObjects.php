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



function bool2str(bool $value){

  
    
  return $value==true?'TRUE':'FALSE';

}

function compare($ob1,$ob2){
  
  echo "{$ob1}=={$ob2} ".bool2str($ob1==$ob2)."<br/>";


  echo "{$ob1}!={$ob2} ".bool2str($ob1!=$ob2)."<br/>";

  echo "{$ob1}==={$ob2} ".bool2str($ob1===$ob2)."<br/>";

  echo "{$ob1}!=={$ob2} ".bool2str($ob1!==$ob2)."<br/>";





}

class Config1{

  public $settings="theme dark";



  function __toString(){


    return "Config1";
  } 

}


class Config2{

  public $settings="theme dark";


  function __toString(){


    return "Config2";
  }


}


$obj1= new Config1();

$obj2=new Config1();


$obj3 = new Config2();

compare($obj2,$obj3);






    ?>

  
  </body>
</html>
