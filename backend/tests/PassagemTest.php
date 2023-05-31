<?php

namespace tests;

use PHPUnit\Framework\TestCase;
use model\Passagem;

class PassagemTest extends TestCase
{
    
    public function testGetSetId(){
        $passagem = new Passagem();
        $passagem->setIdPassagem(1);
        $this->assertEquals(1, $passagem->getIdPassagem());
    }

    public function testeGetSetCodigoAssento(){
        $passagem = new Passagem();
        $passagem->setCodigoAssento(2);
        $this->assertEquals(2, $passagem->getCodigoAssento());
    }

    public function testeGetSetIdVoo(){
        $passagem = new Passagem();
        $passagem->setIdVoo(5);
        $this->assertEquals(5, $passagem->getIdVoo());
    }

    public function testeGetSetIdPassageiro(){
        $passagem = new Passagem();
        $passagem->setIdPassageiro(7);
        $this->assertEquals(7, $passagem->getIdPassageiro());
    }

}
?>
