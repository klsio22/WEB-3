<?php

/* ==========================================================================================
1 - FUNÇÃO
========================================================================================== */

function formatarString(string $name = 'Alan Turing')
{
  return "$name foi o pai da computação.\n";
}

$text1 = formatarString();
$text2 = formatarString('Jair do Caminhão');

echo "1.1 - $text1";
echo "1.2 - $text2";
echo "\n";


/* ==========================================================================================
2 - PASSAGEM POR REFERÊNCIA
========================================================================================== */


function incrementar(&$referenceValue) //passar por referência 
{
  $referenceValue++;
}

$referenceValue = 1;
incrementar($referenceValue);

echo "2.1 - A função alterou o valor: $referenceValue.\n\n";


/* ==========================================================================================
3 - FUNÇÃO ANÔNIMA
========================================================================================== */


$functionAnonym = function () {
  return "Sou uma função anônima.\n";
};

$text = $functionAnonym();
echo "3.1 - $text";

// ---------------------------------------------


/* executa uma função anônima que irá rodar por meio de um parâmetro de outra função
no momento da execução da mesma  */
function rodar($otherFunction)
{
  $otherFunction();
}

rodar(function () {
  echo "3.2 - Sou outra função anônima.\n\n";
});


