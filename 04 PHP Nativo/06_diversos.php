<?php
require_once 'geral.php';

imprimirTitulo('DIVERSOS');

// executa um código passado como string
// evita usar, pois pode causar uma falha de segurança
eval('$variavelSecreta = 300;');
echo "Valor da variável secreta: $variavelSecreta.\n\n";

// Termina a execução. Os comandos são todos iguais.
// exit;
// exit();
// exit(0);
