<?php
require_once 'geral.php';

imprimirTitulo('ARQUIVOS');

$resultado = file_put_contents('exemplo.txt', "Escrevi com PHP!\n");
// retorna um inteiro ou false
if ($resultado === false) {
    echo "Ocorreu um problema ao gravar o arquivo. Verifique as permissões de escrita da pasta.\n\n";
} else {
    echo "Escrevi no arquivo: 'exemplo.txt'\n\n";
}

$conteudo = file_get_contents('arquivo_para_ler.php');
echo "$conteudo\n";
