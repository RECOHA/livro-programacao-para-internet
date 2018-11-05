<?php
// Array do header.
$header = [
   'alg' => 'HS256',
   'typ' => 'JWT'
];

// Codificações.
$header = json_encode($header);
$header = base64_encode($header);

// Exibindo o resultado do header codificado.
echo $header;
echo '<br>';

// Array do payload.
$payload = [
    'iss'   => 'localhost',
    'name'  => 'José da Silva',
    'email' => 'jose.silva@gmail.com'
];

// Codificações.
$payload = json_encode($payload);
$payload = base64_encode($payload);

// Exibindo o resultado do payload codificado.
echo $payload;
echo '<br>';

// Chave utilizada na assinatura do token.
$chave = 'chave_secreta';

// Codificação.
$signature = hash_hmac('sha256', "$header.$payload", $chave, true);
$signature = base64_encode($signature);

// Exibindo o resultado da signature codificada.
echo $signature;
echo '<br>';

// Token JWT finalizado.
echo "$header.$payload.$signature";