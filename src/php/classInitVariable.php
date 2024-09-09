<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>
</head>

<body>
  <?php
  error_reporting(E_ALL);
  ini_set("display_errors", true);



  class Developer
  {


    public string $name;

    private  ?string $skills;



    function setName(string $name)
    {

      $this->name = $name;
    }

    function setSkills(string $skills)
    {
      $this->skills = $skills;
    }

    function getSkills()
    {

      return $this->skills;
    }
  }

  $obj = new Developer();

  /*WONT WORK UNLESS YOU INITIALIZE IT OR SET SOME  VALUE FIRST*/

  /*echo $obj->name;*/


  /*echo $obj->skills;*/
  $obj->setSkills("full stack developer");

  /*$obj->skills = "overridden info";*/

  /*echo $obj->skills;*/

  echo " <h1> skills sets are " . $obj->getSkills() . "</h1>";

  ?>

  <h1>Welcome to php </h1>

</body>

</html>
