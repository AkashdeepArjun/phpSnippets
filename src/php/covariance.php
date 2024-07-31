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


abstract class Processor{

  protected string $model;

    
  public function __construct( string $model){

    $this->model=$model;
  }

  abstract public function clockSpeed();

}

class Intel extends Processor{

    

  function clockSpeed(){

    echo $this->model."<br/>";
    echo "1.87 GHz...<br/>";
  }


}

class Amd extends Processor{


  
  function clockSpeed(){

    echo $this->model."<br/>";
    echo "0.75GHz...<br/>";


    }


}

interface PcBuilder{


  public function buildPc(string $model):Processor;

  


}

class HpFactory implements PcBuilder{


  public function buildPc(string $model
  ):Intel{


    return new Intel($model);






  }

}

class DellFactory implements  PcBuilder{


  public function buildPc(string $model
  ):Amd{


    return new Amd($model);






  }





}


$hp_factory = new HpFactory();

$pc1=$hp_factory->buildPc("intel i7");

$pc1->clockSpeed();

$dell_factory = new DellFactory();

$pc2=$dell_factory->buildPc("dell 55558");

$pc2->clockSpeed();





    ?>

  
  </body>
</html>
