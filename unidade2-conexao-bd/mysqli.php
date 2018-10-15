<?php
// Configuração.
$endereco = 'localhost';
$usuario  = 'mysql';
$senha    = 'password';
$banco    = 'teste';

// Conecta no banco MySQL.
$conexao = mysqli_connect($endereco, $usuario, $senha, $banco);

// Verifica se a conexão falhou e exibe o erro caso não obteve êxito.
if (mysqli_connect_errno()) {
    printf("Conexão falhou!", mysqli_connect_error());
    exit();
}

// Executa o SQL no banco de dados.
mysqli_query($conexao, "INSERT INTO usuarios (id, nome) VALUES (1, 'João da Silva')");

// Encerra conexão.
mysqli_close($conexao);
?>
