<?php

namespace Application\Model;

require_once 'Bird.php';
require_once 'Cow.php';

/* $livingBeings = new $LivingBeings();
Fatal error: require_once(): Failed opening required 'LivingBeings' (include_path='.:/usr/share/php') in /home/vigia/Documentos/UTFPR/WEB 3/3.3.2-herança/main.php on line 8 */


//$Animal = new Animal('teste');

$bird1 = new Bird('Canário');
echo 'Nome do passáro ' . $bird1->getName() . "\n";
$bird1->sound();

$cow = new Cow('Jairo');
echo 'Nome do passáro ' . $cow->getName() . "\n";
$cow->sound();

echo "\nProduz o próprio alimento\n";
echo $cow::HETEROTROPH ? "\tSim\n" : "\tNão\n";
echo $cow::isHeterotroph() ? "\tSim\n" : "\tNão\n";
echo Animal::HETEROTROPH ? "\tSim\n" : "\tNão\n";
echo Animal::isHeterotroph() ? "\tSim\n" : "\tNão\n";


/* Comparação de objetos */

$canary1 = new Bird('Canário');
$canary2 = new Bird('Canário');
$cockatiel = new Bird('Calopsita');

//compara atributos
$comparably1 = ($canary1 == $canary2 ? 'Iguais' : 'Diferentes');

//compara atributos e tipos 
/* Não basta o objeto ter atributos e tipos semelhates se eles não estão no mesmo 
endereço de memória eles não são identicos se não for exatamento o mesmo objeto  */
$comparably2 = ($canary1 === $canary2 ? 'Iguais' : 'Diferentes');

//compara atributos
$comparably3 = ($canary1 == $cockatiel ? 'Iguais' : 'Diferentes');

echo "\ncanary1 == canary2 : $comparably1\n";
echo "\ncanary1 === canary2 : $comparably2\n";
echo "\ncanary1 == cockatiel : $comparably3\n\n";
