<?php
// Implementação da classe Twitter.
class Twitter {
 
    public function send($message) 
    {
        echo $message;
    }
}

// Implementação sem a utilização do padrão.
$twitter = new Twitter();
$twitter->send('Post no Twitter');