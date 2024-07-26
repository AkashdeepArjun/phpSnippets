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

  

    
    
class Product{

  private ?int $id;

  private ?string $name;


  private function __construct(?int $id=null,?string $name=null){

      $this->id=$id;
      $this->name=$name;

  }

  public static function createObject($id,$name):static{

    $new_obj = new static($id,$name);

    return $new_obj;
  }

  

  public static function fromJson(string $json):static{
  
    $data =json_decode($json,true);

    return new static($data['id'],$data['name']);

  }




}


//WONT WORK CONSTRUCTOR IS PRIVATE
/*$obj = new Product();   //THROWS FATAL EROR*/




//WORKS COZ WE INDIRECTLY CREATING OBJECTS

$obj = Product::createObject(364,"Akashdeep wadhwa");

print_r($obj);


$arr = array("id"=>364,"name"=>"Mr Akashdeep wadhwa");

$json =json_encode($arr);

$obj_2= Product::fromJson($json);

print_r($obj_2);




    ?>

    <h1>Welcome to php tutorial </h1>
  
  </body>
</html>
