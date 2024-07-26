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

      
      
class Base{
  
    public $var_public ='public info';

    protected $var_protected='protected info';


    private $var_private='private info';


    public function logic_public(){


      print_r("<br/> public logic access");
    }


    protected function logic_protected(){


      print_r("<br/> protected logic here");

    }

    private function logic_private(){


      print_r("<br/> private logic here");
    }



}


class TestChild extends Base{


  


function call_protected(){
    


  parent::logic_protected();



}

function call_private(){


parent::logic_private();


}

  

}
// WORKS
$obj = new TestChild();

print_r($obj->var_public);

$obj->logic_public();

    
$obj->call_protected();



//WONT WORKS

/*$obj->logic_protected(); //cant call parent method direct*/

/*print_r($obj->var_private);   //cant acces base private method undefined*/

/*$obj->call_private();   // private means call within class definition*/



    ?>

    <h1>Welcome to php tutorial </h1>
  
  </body>
</html>
