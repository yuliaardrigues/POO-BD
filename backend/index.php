<?php
require_once "./config/Conexao.php";
require_once "./dao/PassageiroDAO.php";
require_once "./model/Passageiro.php";

require_once "./dao/PassagemDAO.php";
require_once "./model/Passagem.php";


// $passagem = new Passagem();
// $passagemDAO = new PassagemDAO();

// $passagem->setCodigoAssento(2);
// $passagem->setIdPassageiro(1);

// $passagemDAO->create($passagem);


$passageiroDAO = new PassageiroDAO();
$passageiro = new Passageiro();
$passageiro->setId(3);
$passageiro->setCpf("09328329320");
$passageiro->setDataNascimento('1990-09-14');
$passageiro->setNome("Ana Lívia Alves");
$passageiro->setEmail("laviaaraujo.dev@gmail.com");
$passageiro->setTelefone("88992232345");

$passageiroDAO->create($passageiro);



// $passageiroDAO->update($passageiro);

// $passageiroDAO->delete(2);

// foreach($passageiroDAO->read() as $tarefa){
//     echo $tarefa['cpf']."<br/>";
//     echo $tarefa['dataNascimento']."<br/>";
//     echo $tarefa['email']."<br/>";
//     echo $tarefa['nome']."<br/>";
//     echo $tarefa['telefone']."<br/>";
// }

?>
