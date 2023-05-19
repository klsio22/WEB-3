<?php
require_once 'geral.php';

imprimirTitulo('ARRAY');

$array = ['a', 'b', 'c'];
$tamanho = count($array);
echo "Array de tamanho: $tamanho\n\n";

$indice = 0;
$quantidade = 2;
$valor = 'PHP';
$array = array_fill($indice, $quantidade, $valor);
print_r($array);
echo "\n";

$array = [1,2,3,4,5,6];
$array = array_filter($array, function ($valor) {
    return $valor > 4;
});
// $isMaiorQueQuatro = function ($valor) {
//     return $valor > 4;
// };
// $array = array_filter($array, $isMaiorQueQuatro);
print_r($array);
echo "\n";

$array = [
    'nome' => 'Grace Hopper', // fez o primeiro compilador
    'títulação' => 'Phd',
    'formação' => 'matemática',
];
$resultado = array_key_exists('nome', $array) ? 'SIM' : 'NÃO';
echo "A chave 'nome' existe? $resultado.\n\n";

print_r(array_keys($array));
echo "\n";

$array = [1,2,3];
$array = array_map(function ($valor) {
    return $valor * 10;
}, $array);
print_r($array);
echo "\n";
