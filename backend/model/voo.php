<?php
class Voo
{
    private $idVoo;
    private $passagemDisponivel;
    private $horarioPartida;
    private $horarioChegada;
    private $idAeroportoChegada;
    private $idAeroportoPartida;
    private $idAviao;

    public function getIdVoo()
    {
        return $this->idVoo;
    }

    public function setIdVoo($idVoo)
    {
        $this->idVoo = $idVoo;
    }

    public function getPassagemDisponivel()
    {
        return $this->passagemDisponivel;
    }

    public function setPasaagemDisponivel($passagemDisponivel)
    {
        $this->passagemDisponivel = $passagemDisponivel;
    }

    public function getHorarioPartida()
    {
        return $this->horarioPartida;
    }

    public function setHorarioPartida($horarioPartida)
    {
        $this->horarioPartida = $horarioPartida;
    }

    public function getHorarioChegada()
    {
        return $this->horarioChegada;
    }

    public function setHorarioChegada($horarioChegada)
    {
        $this->horarioChegada = $horarioChegada;
    }


    public function getIdAviao()
    {
        return $this->idAviao;
    }


    public function setIdAviao($idAviao)
    {
        $this->idAviao = $idAviao;
    }

    
    public function getIdAeroportoChegada()
    {
        return $this->idAeroportoChegada;
    }

  
    public function setIdAeroportoChegada($idAeroportoChegada)
    {
        $this->idAeroportoChegada = $idAeroportoChegada;

        return $this;
    }

   
    public function getIdAeroportoPartida()
    {
        return $this->idAeroportoPartida;
    }

   
    public function setIdAeroportoPartida($idAeroportoPartida)
    {
        $this->idAeroportoPartida = $idAeroportoPartida;

        return $this;
    }
}
