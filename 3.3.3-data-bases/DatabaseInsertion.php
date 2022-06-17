<?php

namespace Application\Model;

trait DatabaseInsertion
{
  private $insertions = 0;

  public function insertion()
  {
    echo "Inserindo... OK\n";
    $this->insertions++;
  }

  public function getQuantityInsertion()
  {
    return $this->insertions;
  }
}
