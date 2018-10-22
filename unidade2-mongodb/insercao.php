<?php

try {
    // Conectando no MongoDB através do arquivo de conexão.
    $conexao = new MongoDB\Driver\Manager("mongodb://localhost:27017") or die('Conexão falhou!');

    // Objeto utilizado para, neste exemplo, a escrita dos dados.
    $bulk = new MongoDB\Driver\BulkWrite;

    // Informações a serem inseridas no banco.
    $dados = [
        '_id'   => new MongoDB\BSON\ObjectID,
        'nome'  => 'Manoel dos Santos',
        'idade' => '30'
    ];

    // Inserindo o dados no banco "exemplo" na coleção "pessoas".
    $bulk->insert($dados);
    $conexao->executeBulkWrite('exemplo.pessoas', $bulk);
}
catch (MongoDB\Driver\Exception\Exception $e) {
    // Exibe a mensagem da exception.
    echo $e->getMessage();
}
?>