<?php
class voo{
    private $idVoo;
    private $passagemDisponivel;
    private $horariopartida;
    private $horarioChegada;
    private $idAeroporto;
    private $idAviao;
    
public function getidVoo(){
    return $this->idVoo;
}
public function setidVoo($idVoo){
    $this->idVoo = $idVoo;
}
public function getpassagemDisponivel(){
    return $this->passagemDisponivel;
}
public function setpasaagemDisponivel ($passagemDisponivel){
    $this->passagemDisponivel = $passagemDisponivel;
}

public function gethorariopartida(){
    return $this->horariopartida;
}
public function sethorariopartida ($horariopartida){
    $this->horariopartida = $horariopartida;
}
public function gethorarioChegada(){
    return $this->horarioChegada;
}
public function sethorarioChegada ($horarioChegada){
    $this->horarioChegada = $horarioChegada;
}

    public function getIdAeroporto()
    {
        return $this->idAeroporto;
    }

    public function setIdAeroporto($idAeroporto)
    {
        $this->idAeroporto = $idAeroporto;

        return $this;
    }

  
    public function getIdAviao()
    {
        return $this->idAviao;
    }


    public function setIdAviao($idAviao)
    {
        $this->idAviao = $idAviao;

        return $this;
    }
}