<?php
// Verificando a existência de uma sessão.
if (session_status() <> PHP_SESSION_ACTIVE) {
    // Definindo o prazo para a cache expirar em 120 minutos.
    session_cache_expire(120);
    session_start();
}

// Gravando valores na sessão.
$_SESSION['nome'] = 'José da Silva';
$_SESSION['user'] = 'admin';

// Recuperando os dados da sessão.
echo $_SESSION['nome'];
echo $_SESSION['user'];

// Apagando uma variável da sessão.
unset($_SESSION['nome']);

// Apagando todos os dados de uma sessão.
session_unset();

// Definindo novos valores na sessão.
$_SESSION['email'] = 'josedasilva@gmail.com';

// Destruindo a sessão.
session_destroy();

// Mostrando os dados da sessão destruída.
echo $_SESSION['email'];