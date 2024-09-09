 


<?php

  
class Home{



  function test(){
  
    $fiber = new Fiber(function(){
    
    $info = Fiber::suspend('logic');

    echo " <br/>value passed to resume fiber".$info."<br/>";


    });


    $status = $fiber->start();


    echo "<br/> status of fiber at suspension ".$status;


    $fiber->resume('popat');

      


  }


}





?>
