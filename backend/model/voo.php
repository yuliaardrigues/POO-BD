<?php
class Voo
{
    private $idVoo;
    private $passagemDisponivel;
    private $horarioPartida;
    private $horarioChegada;
    private $idAeroporto;
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

    public function getIdAeroporto()
    {
        return $this->idAeroporto;
    }

    public function setIdAeroporto($idAeroporto)
    {
        $this->idAeroporto = $idAeroporto;
    }


    public function getIdAviao()
    {
        return $this->idAviao;
    }


    public function setIdAviao($idAviao)
    {
        $this->idAviao = $idAviao;
    }
}
