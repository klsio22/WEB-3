<?php

namespace Application\Model;

require_once 'DatabaseQuery.php';
require_once 'DatabaseInsertion.php';

class DataBase
{
  use DatabaseInsertion;//use dentro da classe serve para incluir um trait
  use DatabaseQuery;
}
