<?php
define('ARQUIVO_DE_DADOS', 'dados.txt');

/* Caso o arquivo de dados não exista, crie um. */
if (!file_exists(ARQUIVO_DE_DADOS)) {
    $arrayVazio = serialize([]);
    file_put_contents(ARQUIVO_DE_DADOS, $arrayVazio);
}

/* Verifique se o usuário enviou um cadastro. */
$precisaCadastrar = array_key_exists('usuario', $_POST) && array_key_exists('conteudo', $_POST);
if ($precisaCadastrar) {
	/* Carregue o arquivo de dados, inclua a mensagem e salve o arquivo de dados. */
    $dadosString = file_get_contents(ARQUIVO_DE_DADOS);
    $dados = unserialize($dadosString);
    $dados[] = [
        'usuario' => $_POST['usuario'],
        'conteudo' => $_POST['conteudo'],
    ];
    $dadosString = serialize($dados);
    file_put_contents(ARQUIVO_DE_DADOS, $dadosString);
}

/* Carregue o arquivo de dados com as mensagens. */
$mensagensString = file_get_contents(ARQUIVO_DE_DADOS);
$mensagens = unserialize($mensagensString);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Chat Online</title>
</head>
<body>
	<h1>Chat Online</h1>
    
	<h2>Envie a sua mensagem</h2>
    <form method="post">
        Usuário: <input name="usuario">
        Mensagem: <textarea name="conteudo"></textarea>
        <input type="submit" value="Enviar mensagem">
    </form>
	
    <h2>Mensagens</h2>
    <?php foreach ($mensagens as $mensagem) : ?>
        <p>
            <strong><?= $mensagem['usuario'] ?></strong>: <?= $mensagem['conteudo'] ?>
        </p>
    <?php endforeach ?>
</body>
</html>
