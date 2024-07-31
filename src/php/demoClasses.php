<!DOCTYPE html>

<head>

<title>classesDemo</title>

</head>


<body>

<?php
error_reporting(E_ALL);
ini_set("display_errors",true);



  /*WONT WORK READONLY DOES NOT SUPPORT UNKNOWN VARIABLE*/

/*readonly class Test{*/
/**/
/*public $info;*/
/**/
/*}*/



/*WONT WORK STATIC PROPERTY IS MEANT TO CHANGE AND IT DOES NOT MAKE SENSE TO MAKE IT READABLE ONLY*/
/**/
/*readonly class TestStatic{*/
/**/
/**/
/*public static int $result_code;*/
/**/
/*}*/

 
class TestSimpleClass{


  function __construct(){

    echo "<br> object was created !!!!<br/>";
  }
}

class Child {

}
 /*WE CAN CREATE VARIABE NAME AND REFERENCE CLASS BY ANOTHER NAME ;*/

$obj1 = new TestSimpleClass();

$className='TestSimpleClass';

$obj2 = new $className();


//WE CAN CREATE INSTANCE BY CLASSNAME::class 

$obj3 = new (TestSimpleClass::class);



$copy_obj = $obj1;    // copy of object
$obj_ref = &$obj1;    //reference of object

$obj1->info="just random stuff here";
$obj1=null;

/*echo $copy_obj->info;*/
echo $obj_ref->info;


$ob = new Child();

$res= $ob instanceof TestSimpleClass;

echo "<br/> ob is child of TestSimpleClass {$res}";
?>


</body>













   


</html>
