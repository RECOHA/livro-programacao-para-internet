<?php

try {
    // Conectando no MongoDB através do arquivo de conexão.
    $conexao = new MongoDB\Driver\Manager("mongodb://localhost:27017") or die("Conexão falhou!");

    // Objeto utilizado para, neste exemplo, a escrita dos dados.
    $bulk = new MongoDB\Driver\BulkWrite;

    // Pessoa a ser excluída.
    $filtro = ['nome' => 'Manoel dos Santos'];

    // Excluindo os dados no banco "exemplo" na coleção "pessoas".
    $bulk->delete($filtro);
    $conexao->executeBulkWrite('exemplo.pessoas', $bulk);
}
catch (MongoDB\Driver\Exception\Exception $e) {
    // Exibe a mensagem da exception.
    echo $e->getMessage();
}
?>