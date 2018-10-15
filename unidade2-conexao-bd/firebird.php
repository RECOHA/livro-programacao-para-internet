<?php
// Configurações.
$endereco = 'localhost:teste';
$usuario  = 'SYSDBA';
$senha    = 'masterkey';

// Conexão com o banco de dados.
$conexao = ibase_connect($endereco, $usuario, $senha);

// Executando a query.
ibase_query($conexao, "INSERT INTO usuarios (id, nome) VALUES (1, 'João da Silva')");

// Encerrando a conexão.
ibase_close($conexao);
?>