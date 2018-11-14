<?php
namespace ExemploTests;

use PHPUnit_Framework_TestCase;
use Exemplo\User;

class UserTest extends PHPUnit_Framework_TestCase
{
    public function testNomeCompleto()
    {
        $user = new User("João", "Silva");

        $esperado = "João Silva";
        $atual    = $user->getNomeCompleto();

        $this->assertEquals($esperado, $atual);
    }

    public function testObtemNome()
    {
        $user = new User("João", "Silva");

        $this->assertEquals("João", $user->getNome());
    }

    public function testObtemSobreNome()
    {
        $user = new User("João", "Silva");

        $this->assertEquals("Silva", $user->getSobreNome());
    }
}
