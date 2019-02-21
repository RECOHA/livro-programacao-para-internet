<?php
// Configurações.
$endereco = 'localhost';
$usuario  = 'root';
$senha    = '';

try {
    // Conexão com o MYSQL.
    $conexao = new PDO("mysql:dbname=exemplo; host=$endereco", $usuario, $senha);

    // Executa a instrução SQL para criação da tabela.
    $conexao->exec("CREATE DATABASE exemplo");

    // Executa a instrução SQL para criação da tabela.
    $conexao->exec("CREATE TABLE usuarios (id MEDIUMINT UNSIGNED NOT NULL AUTO_INCREMENT, nome VARCHAR(80) NOT NULL, PRIMARY KEY (id, nome))");

    // Fecha conexão.
    $conexao = null;
}
catch (PDOException $erro) {
    // Caso ocorra alguma exceção, demonstra o erro.
    echo $erro->getMessage();
    die();
}