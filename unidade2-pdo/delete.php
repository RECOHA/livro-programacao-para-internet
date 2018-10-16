<?php
// Configurações.
$endereco = 'localhost';
$usuario  = 'root';
$senha    = '';

try {
    // Conexão com o MYSQL.
    $conexao = new PDO("mysql:dbname=exemplo; host=$endereco", $usuario, $senha);

    // Executa a instrução SQL para excluir o registro com a id = 1.
    $conexao->exec("DELETE FROM usuarios WHERE id = 1");

    // Fecha conexão.
    $conexao = null;
}
catch (PDOException $erro) {
    // Caso ocorra alguma exceção, demonstra o erro.
    echo $erro->getMessage();
    die();
}