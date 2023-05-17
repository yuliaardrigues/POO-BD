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

    /**
     * Get the value of idAeroportoChegada
     */ 
    public function getIdAeroportoChegada()
    {
        return $this->idAeroportoChegada;
    }

    /**
     * Set the value of idAeroportoChegada
     *
     * @return  self
     */ 
    public function setIdAeroportoChegada($idAeroportoChegada)
    {
        $this->idAeroportoChegada = $idAeroportoChegada;

        return $this;
    }

    /**
     * Get the value of idAeroportoPartida
     */ 
    public function getIdAeroportoPartida()
    {
        return $this->idAeroportoPartida;
    }

    /**
     * Set the value of idAeroportoPartida
     *
     * @return  self
     */ 
    public function setIdAeroportoPartida($idAeroportoPartida)
    {
        $this->idAeroportoPartida = $idAeroportoPartida;

        return $this;
    }
}
