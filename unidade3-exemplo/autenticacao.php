<?php
// Inicia a sessão.
session_start();

// Verifica se as informações foram preenchidas no formulário.
if (empty($_POST['usuario']) OR empty($_POST['senha'])) {
    die('Preencha corretamente o formulário.');
}

// Informações do formulário.
$usuario = $_POST['usuario'];
$senha   = sha1($_POST['senha']);

// Conexão com o MYSQL.
$conexao = mysqli_connect('localhost', 'root', '', 'exemplo') or die('Conexão falhou!');

// Executa a instrução SQL no banco.
$resultado = mysqli_query($conexao, "SELECT * FROM users WHERE usuario = '$usuario' AND senha = '$senha'");

// Verifica se foi encontrado algum usuário com as informações preenchidas.
if (mysqli_num_rows($resultado) > 0) {
    // Usuário encontrado, organizando o retorno do banco em um objeto.
    $usuario = $resultado->fetch_object();

    // Registra na sessão as informações do usuário.
    $_SESSION['status'] = true;
    $_SESSION['nome']   = $usuario->nome;
    $_SESSION['email']  = $usuario->email;

    // Redireciona para o início do sistema.
    header("location:home.php");
}
else {
    die('Nenhum usuário encontrado com essas informações.');
}

// Fecha conexão.
mysqli_close($conexao);