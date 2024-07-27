
<?php


function snap($message,$source,$line){
  
  echo "<br/>";
  /**/
  /*/*echo "MESSAGE FROM {__FILE__}";*/

  print_r( "MESSAGE FROM ".$source);

  echo "<br/> MESSAGE:<br/>";

  print_r($message);

  echo "<br/>";

  print_r("AT LINE ".$line);

  echo "<br/>";


 }




?>
