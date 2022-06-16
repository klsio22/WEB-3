<?php
// não tem namespace

require_once 'Person.php';
use Application\Model\Person;

$person = new Person('Klesio'); //Funciona porque está no mesmo namespace
echo 'Nome da person ' . $person->getName() . "\n";

$person = new \Application\Model\Person('Klesio');
echo 'Nome da person ' . $person->getName() . "\n";
