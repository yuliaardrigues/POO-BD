<?php

namespace tests;

use PHPUnit\Framework\TestCase;
use model\Voo;

class VooTest extends TestCase{

    public function testGetSetidVoo(){
       $voo = new Voo();
        $voo->setIdVoo(1);
        $this->assertEquals(1, $voo->getIdVoo());
    }
    public function testeGetSetpassagemDisponivel(){
        $voo = new Voo();
        $voo->setpassagemDisponivel(5);
        $this->assertEquals(5, $voo->getpassagemDisponivel());
    }
    public function testeGetSethorarioPartida(){
        $voo = new Voo();
        $voo->sethorarioPartida("20:20");
        $this->assertEquals("20:20", $voo->gethorariopartida("20:20"));
    }
    public function testeGetSethorarioChegada(){
        $voo = new Voo();
        $voo->sethorarioChegada("01:60");
        $this->assertEquals("01:60", $voo->gethorarioChegada("01:60"));
    }
    public function testeGetSetidAeroporto(){
        $voo = new Voo();
        $voo->setIdAeroporto(1);
        $this->assertEquals(1, $voo->getidAeroporto(1));
    }
    public function testeGetSetidAviao(){
        $voo = new Voo();
        $voo->setidAviao(1);
        $this->assertEquals(1, $voo->getidAviao(1));
    }
}

?>