<?php
require_once 'geral.php';

imprimirTitulo('CLASSES');

class Pessoa
{
}
class Aluno extends Pessoa
{
}
$pessoa = new Pessoa();
$classe = get_class($pessoa);
echo "Classe: $classe\n\n";

$aluno = new Aluno();
$resultado1 = $aluno instanceof Pessoa ? 'SIM' : 'NÃO';
$resultado2 = $aluno instanceof Aluno ? 'SIM' : 'NÃO';
$resultado3 = is_a($aluno, 'Pessoa') ? 'SIM' : 'NÃO';
$resultado4 = is_a($aluno, 'Aluno') ? 'SIM' : 'NÃO';
echo "\$aluno instanceof Pessoa? $resultado1\n";
echo "\$aluno instanceof Aluno? $resultado2\n";
echo "\$aluno is_a Pessoa? $resultado3\n";
echo "\$aluno is_a Aluno? $resultado4\n\n";
