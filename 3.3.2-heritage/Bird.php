<?php

namespace Application\Model;

require_once 'Animal.php';

class Bird extends Animal
{

  public function __construct($name)
  {
    parent::__construct($name);
  }

  public function sound()
  {
    echo "Piu\n";
  }
}
