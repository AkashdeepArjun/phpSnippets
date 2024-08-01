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

enum State:string{
    
  case S404='not found';
  case S200='success';
  case S500='critical error';

  /**/
  /*public function  __toString(){*/
  /**/
  /**/
  /*  return self;*/
  /*}*/

}

print State::S404->value;

print("<br/>");

print State::S200->value;

print("<br/>");

/*State::S500->value='nothing here lmao';*/
print State::S500->value;


//  methods of enum

print("<br/>");

$res=State::from('success');    //RETURNS THE ENUM CONSTANT BY PASSING VALUE
                                    // THROWS  ERROR IN CASE NOT FOUND

echo $res->name;


$res2 = State::tryFrom('critical errors'); //RETURNS ENUM IF FOUND NULL OTHERWISE

echo "<br/>".$res2->name;
?>

  
  </body>
</html>
