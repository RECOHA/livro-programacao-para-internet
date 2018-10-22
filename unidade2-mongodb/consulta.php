<?php

try {
    // Conectando no MongoDB através do arquivo de conexão.
    $conexao = new MongoDB\Driver\Manager("mongodb://localhost:27017") or die('Conexão falhou!');

    // Instanciação do objeto que executará a query.
    $query = new MongoDB\Driver\Query([]);

    // Execução da query, por parâmetro o path da coleção, no formato banco.coleção.
    $resultado = $conexao->executeQuery('exemplo.pessoas', $query);

    // Tabela para exibir os dados.
    echo "<table>";

    foreach ($resultado as $registro) {
        echo "<tr>";
        echo "<td>" . $registro->_id . "</td>";
        echo "<td>" . $registro->nome . "</td>";
        echo "<td>" . $registro->idade . "</td>";
        echo "</tr>";
    }

    echo "</table>";
}
catch (MongoDB\Driver\Exception\Exception $e) {
    // Exibe a mensagem  da exception.
    echo $e->getMessage();
}
?>