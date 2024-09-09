<html>

<head>

  <title>Multiple Inheritqance</title>


</head>

<body>

  <?php
  error_reporting(E_ALL);
  ini_set('display_errors', true);

  require_once './MultipleInherit.php';

  use old_lib\Dev_alpha;
  use new_lib\Dev_noob;



  class Test extends Dev_alpha {}

  class Test extends  Dev_noob {}


  $test_obj = new Test();

  $test_obj->logic();



  ?>




















</body>


















</html>
