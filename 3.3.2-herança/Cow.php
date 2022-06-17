<?php

namespace Application\Model;

require_once 'Animal.php';

class Cow extends Animal
{

  public function __construct($name)
  {
    parent::__construct($name);
  }

  public function sound()
  {
    echo "Muuu\n";
  }
}
