<?php
// Recupera a sessão e depois a encerra.
session_start();
session_destroy();

// Redireciona para a página de autenticação.
header("location:index.html");