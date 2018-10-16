<?php
// Configurações.
$endereco = 'localhost';
$usuario  = 'root';
$senha    = '';

try {
    // Conexão com o MYSQL.
    $conexao = new PDO("mysql:dbname=exemplo; host=$endereco", $usuario, $senha);

    // Executa a instrução SQL no banco.
    $resultado = $conexao->query("SELECT * FROM usuarios");

    // Verifica se foi encontrado algum registro.
    if ($resultado) {
        // Percorre os resultados para iteração via fetch.
        while ($registro = $resultado->fetch(PDO::FETCH_OBJ)) {
            echo "Código: " . $registro->id . " - Nome: " . $registro->nome . "<br>";
        }
    }

    // Fecha conexão.
    $conexao = null;
}
catch (PDOException $erro) {
    // Caso ocorra alguma exceção, demonstra o erro.
    echo $erro->getMessage();
    die();
}