<?php
require_once 'geral.php';

imprimirTitulo('TEXTO');

$asciiValor = chr(97);
echo "A posição 97 na tabela ASCII vale: $asciiValor.\n";
$asciiIndice = ord('Z');
echo "A letra 'Z' está na posição $asciiIndice da tabela ASCII.\n\n";

$texto = 'azul amarelo verde';
$array = explode(' ', $texto);
print_r($array);
echo "\n";

$novoTexto = implode(' - ', $array); // join
echo "$novoTexto.\n\n";

$comprimento = strlen('0123456789');
echo "Comprimento do texto: $comprimento.\n\n";

$texto = 'aprender';
$inicio = 1;
$pedacoDoTexto = substr($texto, $inicio); // pega até o final
// $pedacoDoTexto = substr($texto, $inicio, $tamanho);
echo "$pedacoDoTexto\n\n";

$texto = '   texto aleatório         ';
$texto = trim($texto);
echo "$texto\n";
