<?php
// Configuração.
$endereco = 'localhost';

// Tenta se conectar com o banco de dados, se não for possível exibe a mensagem.
$conexao = new MongoDB\Driver\Manager("mongodb://$endereco:27017") or die('Conexão falhou!');

// Conexão bem sucedida.
echo 'Conexão Ok!';

// Executa o comando para retornar as informações do banco "exemplo".
$stats     = new MongoDB\Driver\Command(['dbstats' => 1]);
$resultado = $conexao->executeCommand('exemplo', $stats);

// Método toArray() retorna os dados em um array.
$stats = current($resultado->toArray());

// Exibindo conteúdo retornado.
var_dump($stats);
?>