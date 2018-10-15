<?php
// Conexão com o PostgreSQL.
$conexao = pg_connect("host=localhost port=5432 dbname=teste user=postgres password=pgsql");

// Insere um registro no banco.
pg_query($conexao, "INSERT INTO usuarios (id, nome) VALUES (1, 'João da Silva')");

// Encerra a conexão.
pg_close($conexao);
?>