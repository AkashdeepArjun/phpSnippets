  <body>
    <?php
    error_reporting(E_ALL);
    ini_set("display_errors", true);

    require_once './utils.php';

    //PHP 8.1.0 STATIC INSIDE TRAIT NOT ALLOWD
    trait Module
    {

      static $trail = 0;
      function logic()
      {



        self::$trail += 1;

        print_r(self::$trail);

        print_r("<br/>");
      }
    }



    class ModA
    {

      use Module;
    }


    class ModB
    {


      use Module;
    }



    $mod_a = new ModA();

    $mod_b = new ModB();

    $mod_a->logic();

    $mod_b->logic();




    ?>


  </body>

  </html>
