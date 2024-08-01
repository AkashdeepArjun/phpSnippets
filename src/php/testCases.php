*<html lang="en">*/
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
      </head>
  <body>
<?php 
error_reporting(E_ALL);
ini_set("display_errors",true);



enum ErrorCode{

case XFORCE_FATAL;


}

enum Kernel_Error extends ErrorCode{

case KERNEL_POTATO;

}


function quick_fix(ErrorCode $code){

  return match($code){
    
    ErrorCode::XFORCE_FATAL=>'clear cache and issue will be fixed',
    Kernel_Error::KERNEL_POTATO=>'clear directory ',
  };



}


quick_fix(ErrorCode::XFORCE_FATAL);





    ?>

  
  </body>
</html>
