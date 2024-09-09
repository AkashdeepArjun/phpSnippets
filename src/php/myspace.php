<?php

namespace plans;

class Greet
{
  function sayHi()
  {

    echo " greetings from namespace plans <br/>";
  }
}

namespace fruit;

class Greet
{

  function sayHi()
  {
    echo "oh my gawwd redefined method<br/>";
  }
}
