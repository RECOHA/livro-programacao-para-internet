<?php
// Configuração.
$endereco = 'localhost';
$usuario  = 'root';
$senha    = '';
$banco    = 'exemplo';

// Conecta no banco MySQL.
$conexao = mysqli_connect($endereco, $usuario, $senha, $banco);

// Se a conexão falhou exibe o erro e termina o programa.
if (mysqli_connect_errno()) {
    die('Conexão falhou!' . mysqli_connect_error());
}

// Conexão realizada com sucesso.
echo "Conexão ok!";

// Encerra conexão.
mysqli_close($conexao);
?>
