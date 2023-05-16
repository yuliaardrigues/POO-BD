<?php
class Aeroporto{
    private $idAeroporto;
    private $nome;
    private $cidade;
    private $estado;
    private $cep;    

    public function getIdAeroporto()
    {
        return $this->idAeroporto;
    }

    public function setIdAeroporto($idAeroporto)
    {
        $this->idAeroporto = $idAeroporto;
    }

  
    public function getCidade()
    {
        return $this->cidade;
    }

  
    public function setCidade($cidade)
    {
        $this->cidade = $cidade;
      
    }

    
    public function getEstado()
    {
        return $this->estado;
    }

   
    public function setEstado($estado)
    {
        $this->estado = $estado;       
    }

    public function getCep()
    {
        return $this->cep;
    }

    
    public function setCep($cep)
    {
        $this->cep = $cep;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
    }
}
?>
