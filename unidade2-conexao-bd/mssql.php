<?php
// Configurações.
$endereco = 'localhost';
$usuario  = 'root';
$senha    = '';
$banco    = 'exemplo';

// Conexão com o banco de dados.
$conexao = mssql_connect($endereco, $usuario, $senha) or die('Conexão falhou!');

// Conexão realizada com sucesso.
echo "Conexão ok!";

// Encerrando a conexão.
mssql_close($conexao);
?>