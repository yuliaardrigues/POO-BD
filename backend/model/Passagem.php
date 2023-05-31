<?php

namespace model;

class Passagem{
    private int $idPassagem;
    private int $codigoAssento;
    private int $idVoo;
    private int $idPassageiro;
   
    public function getIdPassagem()
    {
        return $this->idPassagem;
    }

    public function setIdPassagem($idPassagem)
    {
        $this->idPassagem = $idPassagem;
    }

   
    public function getCodigoAssento()
    {
        return $this->codigoAssento;
    }

  
    public function setCodigoAssento($codigoAssento)
    {
        $this->codigoAssento = $codigoAssento;
    }

    public function getIdVoo()
    {
        return $this->idVoo;
    }

    public function setIdVoo($idVoo)
    {
        $this->idVoo = $idVoo;
    }

    public function getIdPassageiro()
    {
        return $this->idPassageiro;
    }

    public function setIdPassageiro($idPassageiro)
    {
        $this->idPassageiro = $idPassageiro;
    }
}


?>
