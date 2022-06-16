<?php

namespace Application\Model; //procura na mesma pasta

/* require 'file.php' -> só executa caso encontre o local arquivo 
ele para a aplicação caso não encontre 

include '..file.php -> procura a pasta caso não encotre ele passa direto'
include.once '..file.php'-> inclui somente uma vez 
*/

require_once 'Person.php';

$person = new Person('Klesio'); //Funciona porque está no mesmo namespace
echo 'Nome da person ' . $person->getName() . "\n";

$person = new \Application\Model\Person('Klesio');
echo 'Nome da person ' . $person->getName() . "\n";

