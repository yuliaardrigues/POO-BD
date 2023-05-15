<?php
class aeroporto{
    private $idAeroporto;
    private $cidade;
    private $estado;
    private $cep;

    

    public function getIdAeroporto()
    {
        return $this->idAeroporto;
    }

    public function setIdaeroport($idAeroporto)
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
}
?>