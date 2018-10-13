<?php
// Implementação da classe Twitter.
class Twitter {
 
    public function sendTweet($message) 
    {
        echo $message;
    }
}
 
// Interface simples para cada Adapter criado.
interface socialAdapter {
    public function send($message);
}
 
class twitterAdapter implements socialAdapter {
     
    private $twitter;
 
    public function __construct(Twitter $twitter) {
        $this->twitter = $twitter;
    }
     
    public function send($message) {
        $this->twitter->sendTweet($message);
    }
}

// Utilizando o adapter.
$twitter = new twitterAdapter(new Twitter());
$twitter->send('Post no Twitter');