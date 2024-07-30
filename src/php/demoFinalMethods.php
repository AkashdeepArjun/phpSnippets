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



		class Base {

				
			final function gettingData(){
		
				echo "<br/><h1> default method of parent";
}


}


class Modern extends Base{

		  
  function gettingData(){

        echo "<br/> look i overridden method ";

  } 

}





    ?>

  
  </body>
</html>
