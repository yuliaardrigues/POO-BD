<?php

class Passageiro{
    private int $id;
    private string $cpf;
    private string $dataNascimento;
    private string $nome;
    private string $email;
    private string $telefone;

    public function getCpf()
    {
        return $this->cpf;
    }

    public function setCpf($cpf)
    {
        $this->cpf = $cpf;
    }

   
    public function getNome()
    {
        return $this->nome;
    }

   
    public function setNome($nome)
    {
        $this->nome = $nome;
    }
   
    public function getEmail()
    {
        return $this->email;
    }
 
    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function getTelefone()
    {
        return $this->telefone;
    }

    public function setTelefone($telefone)
    {
        $this->telefone = $telefone;
    }

    public function getDataNascimento()
    {
        return $this->dataNascimento;
    }

    
    public function setDataNascimento($dataNascimento)
    {
        $this->dataNascimento = $dataNascimento;
    }
  
    public function getId()
    {
        return $this->id;
    }

    function setId($id)
    {
        $this->id = $id;
    }
}
