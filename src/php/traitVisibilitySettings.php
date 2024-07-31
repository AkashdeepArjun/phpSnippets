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


  trait StackOverFlow {

    public function solution_a(){

  
      print_r("<br/> SOLUTION FROM STACK OVERFLOW<br/>");



    }



  }

  class Test{

    /*use StackOverFlow {solution_a as protected;}*/
      
    use StackOverFlow {solution_a as public;}

  }
    




      $test=new Test();
    $test->solution_a();




    ?>
