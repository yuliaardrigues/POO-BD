<?php

namespace tests;

use PHPUnit\Framework\TestCase;
use model\Passageiro;

class PassageiroTest extends TestCase {
    
    public function testGetSetCpf(){
        $passageiro = new Passageiro();
        $passageiro->setCpf('06424857397'); //Define o valor do atributo
        $this->assertEquals('06424857397', $passageiro->getCpf()); //Verifica se o valor retornado é igual ao valor definido
    }

    public function testGetSetNome() {
        $passageiro = new Passageiro();
        $passageiro->setNome('Joana');
        $this->assertEquals('Joana', $passageiro->getNome());
    }

    public function testGetSetEmail() {
        $passageiro = new Passageiro();
        $passageiro->setEmail('joana@gmail.com');
        $this->assertEquals('joana@gmail.com', $passageiro->getEmail());
    }

    public function testGetSetTelefone() {
        $passageiro = new Passageiro();
        $passageiro->setTelefone('(88) 999969853');
        $this->assertEquals('(88) 999969853', $passageiro->getTelefone());
    }

    public function testGetSetDataNascimento() {
        $passageiro = new Passageiro();
        $passageiro->setDataNascimento('2003-05-11');
        $this->assertEquals('2003-05-11', $passageiro->getDataNascimento());
    }

    public function testGetSetId() {
        $passageiro = new Passageiro();
        $passageiro->setId(1);
        $this->assertEquals(1, $passageiro->getId());
    }
}

?>