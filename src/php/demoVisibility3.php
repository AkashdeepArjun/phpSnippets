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
  
    public const PUBLIC_INFO='public<br/>';

    private const PRIVATE_INFO ='private<br/>';
      
    protected const PROTECTED_INFO= 'protected';



}


class NewModel extends Base{



   public function getInfo(){

  print_r(self::PUBLIC_INFO);

  /*print_r(self::PRIVATE_INFO);*/    //WONT WORK PRIVATE CONSTANTS CANT BE ACCESSED

  print_r(self::PROTECTED_INFO);



  
}


}


$obj = new NewModel();

$obj->getInfo();
    



    ?>

    <h1>Welcome to php tutorial </h1>
  
  </body>
</html>
