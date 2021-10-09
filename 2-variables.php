<?php
//echo hahga; //PHP não para a execução mesmo com erros

$nada = null;
$boolean = true;
$inteiro = 1;
$real = 3.14;
$text = "UTFP";

echo ($nada);
var_dump($text); //Mostra informações sobre a variável
define('MINUTO', 60); // CONTANTE NO PHP
define('HORA', MINUTO * 60);
echo ("1.2 um dia tem " . (24 * HORA) . ' segundos\n\n'); // Ponto para concatenar

/* 
=====================================================================================
  2 - String e impressão
  concatenação e interpolação

=====================================================================================
*/
echo ("2.1-concatenando" . "duas strings\n");
echo "2.2- Concatenando com variáveis: " . $real . "\n"; // É permitido echo sem (Parêntese)
echo "2.3 - interpolação com variáveis: $real\n"; // o PHP aceita variáveis no meio

echo '2.3 - interpolação com variáveis: $real'; //Não interpola com aspas simples
echo "\n\n";
/* 
=====================================================================================
 3-Estruturas de controle
=====================================================================================
*/

$valor = 0;

if ($valor > 0) {
  echo "3.1 - maior que zero\n";
} elseif ($valor < 0) {
  echo "3.1 - maior que zero\n";
} else {
  echo "3.1 - zero\n";
}

if ($valor == false) {
  echo "3.2 - Conversão automática de tipos\n"; // zero vale o mesmo que false
}

if ($valor === false) { /// Também compara os tipos das variáveis
  echo "Erro";
} else {
  echo "3.2 - Sem conversão automática de tiposz\n";
}

//if ternário
echo $valor == 0 ? "3.4 - zero\n\n" : "3.4 - Não é zero\n\n"; // condição?true:false;

echo "\n";
/* 
=====================================================================================
 4-Estruturas de repertição
=====================================================================================
*/
$number = 0;

while ($number < 3) {
  echo "4.1 - Laço while: $number\n";
  $number++;
}

//PHP também suporta 'do-while', 'break e continue'

for ($i = 0; $i < 3; $i++) {
  echo "4.2- Laço For:$i\n";
}

echo "\n";

/* 
=====================================================================================
 5-vectoes
 O indice sempre começa no zero
=====================================================================================
*/


$vecto = array(1, 9.99, 'texto'); // sintaxe antes da versão 5.4
//echo "$vecto\n";
$vecto = [1, 9.99, 'text']; // sintaxe a partir da versão 5.4
//echo "$vecto\n";


$vecto[] = 'novo elemento'; // adciona no final do vecto
echo "5.1 - $vecto[3]\n";

unset($vecto[3]); // remover um elemento 

//For para vectoes : ele percorre os elementos do vecto
foreach ($vecto as $elemento) {
  echo  "5.2 - Elemento:$elemento\n";
}

echo "\n";

foreach ($vecto as $index =>  $elemento) {
  echo  "5.2 - Elemento:$index - $elemento\n";
}

echo "\n";

/* 
=====================================================================================
 6-Matrizes
  No PHP, uma matriz é vetor que possui outro vetor como elemento
=====================================================================================
*/

//Um elemento pode ter qualquer tipo

$vector = [
  [1, 2, 3],
  [5, 6, 45]
];

echo "5.1 - matriz: {$vector[0][0]}\n"; // Verifica o conteúdo das chaves como uma variável
echo "5.2-Matriz : " . $vector[0][0] . "\n\n"; //Concatenando

/* Percorrer a array bidimensional  */
for ($l = 0; $l < count($vector); $l++) {
  for ($c = 0; $c <= count($vector); $c++) {
    echo "Elementos: {$vector[$l][$c]}\n";
  }
};

echo "\n";

/* 
=====================================================================================
 6-Matrizes
  É um vetor em que você escolhe as chaves (índices)
=====================================================================================
*/

$vector = [
  'nome' => 'Maria',
  'idade' => 20
];

$vector['telefone'] = '999999-99999';



echo "6.1 - nome: $vector[nome]\n";
echo "6.2 - Idade:" . $vector['idade'] . "\n";
echo "6.3 - telefone: $vector[telefone]\n";
