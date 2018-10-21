<?php
// Configurações.
$endereco = 'localhost';
$usuario  = 'root';
$senha    = '';
$banco    = 'exemplo';

// Conexão com o PostgreSQL.
$conexao = pg_connect("host=$endereco port=5432 dbname=$banco user=$usuario password=$senha") or die('Conexão falhou!');

// Encerra a conexão.
pg_close($conexao);
?>