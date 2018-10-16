<?php
// Configurações.
$endereco = 'localhost';
$usuario  = 'root';
$senha    = '';

try {
    // Conexão com o MYSQL.
    $conexao = new PDO("mysql:dbname=exemplo; host=$endereco", $usuario, $senha);

    // Executa a instrução SQL no banco.
    $conexao->exec("INSERT INTO usuarios (id, nome) VALUES (1, 'João da Silva')");

    // Fecha conexão.
    $conexao = null;
}
catch (PDOException $erro) {
    // Caso ocorra alguma exceção, demonstra o erro.
    echo $erro->getMessage();
    die();
}