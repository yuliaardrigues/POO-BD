<?php

namespace tests;

use PHPUnit\Framework\TestCase;
use model\Aeroporto;

class AeroportoTest extends TestCase
{
    public function testGetSetIdAeroporto()
    {
        $aeroporto = new Aeroporto();
        $aeroporto->setIdAeroporto(1);
        $this->assertEquals(1, $aeroporto->getIdAeroporto());
    }

    public function testGetSetCidade()
    {
        $aeroporto = new Aeroporto();
        $aeroporto->setCidade('Fortaleza');
        $this->assertEquals('Fortaleza', $aeroporto->getCidade());
    }

    public function testGetSetEstado()
    {
        $aeroporto = new Aeroporto();
        $aeroporto->setEstado('CE');
        $this->assertEquals("CE", $aeroporto->getEstado());
    }

    public function testGetSetCep()
    {
        $aeroporto = new Aeroporto();
        $aeroporto->setCep('60000-000 60');
        $this->assertEquals('60000-000 60', $aeroporto->getCep());
    }

    public function testGetSetNome()
    {
        $aeroporto = new Aeroporto();
        $aeroporto->setNome('Fortaleza Airport - Aeroporto Internacional Pinto Martins');
        $this->assertEquals('Fortaleza Airport - Aeroporto Internacional Pinto Martins', $aeroporto->getNome());
    }
}
?>
