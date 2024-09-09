*<html lang="en">*/

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


  trait Util
  {

    static function logic()
    {

      print_r("<br/><h1> welcome to backend development </h1>");
    }


    function sort()
    {

      print_r("<br/> <h1>Sorting data in ascending order....</h1>");
    }
  }

  class Test
  {

    use util;
  }

  Test::logic();

  $test_obj = new Test();

  $test_obj->sort();


  ?>


</body>

</html>
