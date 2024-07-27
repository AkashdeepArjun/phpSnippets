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

      
class Base {

    public static $setup=array('react','next','css','tailwind');

    public function getSetupDetails(){

      echo "<br/>";
      print_r(self::$setup);

      echo "<br/>";

    }
  
}


class Custom extends Base{

  
  public function getStaticInfos(){

    echo "<br/>";
    print_r(parent::$setup);
    echo "<br/>"; 
  }


}

  //way 1

 print_r(Base::$setup);

echo "<br/>";


// way 2

$base_obj = new Base();

$base_obj->getSetupDetails();



//way 3
$obj = new Custom();
$obj->getStaticInfos();


//way-4


print_r($obj::$setup);


//way -5      WONT WORK  VARIABLE IS STATIC 

/*print_r($base_obj->setup);*/



// way -6
//

print_r(Custom::$setup);    //child can access parent static 



    ?>

    <h1>Static demonstration </h1>
  
  </body>
</html>
