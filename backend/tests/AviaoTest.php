<?php

namespace tests;

use PHPUnit\Framework\TestCase;
use model\Aviao;

class AviaoTest extends TestCase
{
    public function testGetSetIdAviao()
    {
        $aviao = new Aviao();
        $aviao->setIdAviao(1);
        $this->assertEquals(1, $aviao->getIdAviao());
    }

    public function testGetSetModelo()
    {
        $aviao = new Aviao();
        $aviao->setModelo('Boeing 747');
        $this->assertEquals('Boeing 747', $aviao->getModelo());
    }

    public function testGetSetCapacidade()
    {
        $aviao = new Aviao();
        $aviao->setCapacidade(300);
        $this->assertEquals(300, $aviao->getCapacidade());
    }

    public function testGetSetFabricante()
    {
        $aviao = new Aviao();
        $aviao->setFabricante('Airbus');
        $this->assertEquals('Airbus', $aviao->getFabricante());
    }
}
?>
