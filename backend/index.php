<?php
require_once "./config/Conexao.php";
require_once "./dao/PassageiroDAO.php";
require_once "./model/Passageiro.php";


$passageiroDAO = new PassageiroDAO();
$passageiro = new Passageiro();
$passageiro->setId(7);
$passageiro->setCpf("09328329310");
$passageiro->setDataNascimento('22-05-2204');
$passageiro->setNome("Ana Lívia Alves");
$passageiro->setEmail("laviaaraujo.dev@gmail.com");
$passageiro->setTelefone("88992232345");

// $passageiroDAO->create($passageiro);

$passageiroDAO->update($passageiro);

// $passageiroDAO->delete(8);

foreach($passageiroDAO->read() as $tarefa){
    echo $tarefa['cpf']."<br/>";
    echo $tarefa['dataNascimento']."<br/>";
    echo $tarefa['email']."<br/>";
    echo $tarefa['nome']."<br/>";
    echo $tarefa['telefone']."<br/>";
}




?>
