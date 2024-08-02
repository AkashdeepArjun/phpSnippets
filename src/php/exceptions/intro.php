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

  

function inverse($x){
  
  if(!$x){
    throw new Exception("Division by zero");
    
  }

  return 1/$x;

}

try {

  echo inverse(5)."<br/>";
  echo inverse(0)."<br/>";
} catch (Exception $exc) {

  echo  "ERROR MESSAGE RECIEVED " .$exc->getMessage();
  
}finally{

  echo "<br/>CODE RUNS AFTER  EXCEPTION IS THROWN <br/>";
}



    ?>

  
  </body>
</html>
