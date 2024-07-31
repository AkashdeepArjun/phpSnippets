<?php
namespace yautjas;
require_once './AlienFranchise.php';


const TYPE="Hunter";
function roar(){


  echo "<br/>Predaotors roars only <br/>";
}

class Predator {

  

   static function hunt(){

    echo "<br/> Predator hunts using cloaking device  <br/>";
  }


}

roar();
/*xenos\roar();*/ //WONT WORK IT WILL LOOK INSIDE YAUTJAS

\xenos\roar(); // WORKS SINCE WE USING ABSOLUTE PATH HERE





?>
