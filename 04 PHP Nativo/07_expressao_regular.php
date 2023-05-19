<?php
require_once 'geral.php';

imprimirTitulo('EXPRESSÃO REGULAR');

// Estudem expressões regulares em casa, pois será útil na vida profissional.
$formatoEmail = '/^\w+@\w+(\.\w+)+$/i';
$texto = 'exemplo@utfpr.edu.br';
$resultado = preg_match($formatoEmail, $texto);
if ($resultado === 1) {
    echo "O formato do email é válido: $texto.\n\n";
} else {
    echo "Formato inválido.\n\n";
}
