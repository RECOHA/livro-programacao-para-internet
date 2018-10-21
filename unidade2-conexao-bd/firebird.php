<?php
// Configurações.
$endereco = 'localhost:exemplo.gdb';
$usuario  = 'SYSDBA';
$senha    = 'masterkey';

// Conexão com o banco de dados.
$conexao = ibase_connect($endereco, $usuario, $senha);

// Se a conexão falhou exibe o erro e termina o programa.
if (ibase_errmsg()) {
    die('Conexão falhou!' . ibase_errmsg());
}

// Conexão realizada com sucesso.
echo "Conexão ok!";

// Encerrando a conexão.
ibase_close($conexao);
?>