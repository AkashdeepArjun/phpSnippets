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
  
    
class Bug extends Exception{
  

}


function logic($info){

  if($info<0){

      throw new Exception("NEGATIVE NOT ALLOWED");
      
  
  }else if($info<5){

    throw new Bug("LESSER THAN 5 NOT ALLOWED");
    
  }else{

    return $info*2;
  }
    


}


try {

  echo logic(30);

   echo logic(-4);
 
} catch (Bug $bug) {

  echo "<br/> Bug Recieved <br/>".$bug->getMessage();
}catch(Exception $exc){

  echo "<br/> Exception Recieved <br/>".$exc->getMessage();

}finally{


      echo "<br/> EXECUTION AFTER Exception DETECTION";

}
  
  

    ?>

  
  </body>
</html>
