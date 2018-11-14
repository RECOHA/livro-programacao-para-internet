<?php
namespace Exemplo;

class User
{
    protected $nome;
    protected $sobrenome;

    public function __construct($nome, $sobrenome)
    {
        $this->nome      = $nome;
        $this->sobrenome = $sobrenome;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function getSobreNome()
    {
        return $this->sobrenome;
    }


    public function getNomeCompleto()
    {
        return $this->nome . ' ' . $this->sobrenome;
    }
}
