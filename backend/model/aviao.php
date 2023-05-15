<?php
class aviao{
    private $idAviao;
    private $modelo;
    private $capacidade;
    private $fabricante;



    
    public function getidAviao()
    {
        return $this->idAviao;
    }
    public function setidAviao($idAviao)
    {
        $this->idAviao = $idAviao;

       
    }

    public function getModelo()
    {
        return $this->modelo;
    }


    public function setModelo($modelo)
    {
        $this->modelo = $modelo;

        return $this;
    }

    
    public function getCapacidade()
    {
        return $this->capacidade;
    }

   
    public function setCapacidade($capacidade)
    {
        $this->capacidade = $capacidade;

        return $this;
    }

  
    public function getFabricante()
    {
        return $this->fabricante;
    }

    public function setFabricante($fabricante)
    {
        $this->fabricante = $fabricante;

       
    }
}
?>