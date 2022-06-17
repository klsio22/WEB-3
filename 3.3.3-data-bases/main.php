<?php

namespace Application\Model;

require_once 'Database.php';

$dataBase = new DataBase();

$insertions = $dataBase->getQuantityInsertion();
echo "Existem(m) $insertions registrados(s) no banco de dados.\n";

$dataBase->insertion();
$dataBase->query();

$insertions = $dataBase->getQuantityInsertion();
echo "Existem(m) $insertions registrados(s) no banco de dados.\n";
