<?php
// Inicia ou recupera a sessão.
session_start();

// Verifica se existe um usuário registrado na sessão.
if (!$_SESSION['status']) {
    // Não existe usuário ativo, redireciona para o formulário de autenticação.
    header("location:index.html");
}

echo '<h1>Olá, ' . utf8_encode($_SESSION['nome']) . '!</h1>';
echo '<p>Sistema de controle de acesso.<p>';
echo '<a href="sair.php">Sair</a>';