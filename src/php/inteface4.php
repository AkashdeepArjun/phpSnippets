  /*<html lang="en">*/

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
  </head>

  <body>
    <?php
    error_reporting(E_ALL);
    ini_set("display_errors", true);

    require_once './utils.php';

    interface Module
    {

      public function getRequest();

      public function postRequest();
    }

    abstract class Api implements Module
    {
      /**/
      /*public function getRequest(): void*/
      /*{*/
      /**/
      /*  snap("lolwa", __FILE__, __LINE__);*/
      /*}*/

      /*abstract function  getRequest();*/
    }

    class Woman extends Api
    {

      public function postRequest() {}
    }


    $obj = new Woman();

    /*$obj->*/

    print_r($obj)

    ?>


  </body>

  </html>
