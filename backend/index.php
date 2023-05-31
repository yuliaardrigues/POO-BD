<?php
require_once "./config/Conexao.php";
require_once "./dao/PassageiroDAO.php";
require_once "./model/Passageiro.php";

require_once "./dao/PassagemDAO.php";
require_once "./model/Passagem.php";

require_once "./dao/AeroportoDAO.php";
require_once "./model/Aeroporto.php";

require_once "./dao/AviaoDAO.php";
require_once "./model/Aviao.php";

require_once "./dao/voodao.php";
require_once "./model/voo.php";

 //$voodao = new vooDAO();
 //$voo = new Voo();
 //$voo->setpasaagemDisponivel(5);
// $voo->sethorarioPartida("20:20");
 //$voo->sethorarioChegada("01:60");
// $voo->setIdAeroporto(1);
//$voo->setIdAviao(1);
 //$voodao->create($voo);








// $aviadao = new AviaoDAO();
// $aviao = new Aviao();
// $aviao->setIdAviao(2);
// $aviao->setCapacidade(15);
// $aviao->setModelo("BR");
// $aviao->setFabricante("Agvafa");
// $aviadao->create($aviao);
// $aviadao->update($aviao);
// $aviadao->delete(3);
// foreach($aviadao->read() as $aviao){
//     echo $aviao['capacidade']."<br/>";
//     echo $aviao['modelo']."<br/>";
//     echo $aviao['fabricante']."<br/>";
// }









// $aeroporto = new Aeroporto();
// $aeroportodao = new AeroportoDAO();
// $aeroporto->setIdAeroporto(2);
// $aeroporto->setNome("Orlando Bezerra de Menezes");
// $aeroporto->setCidade("Fortalexa");
// $aeroporto->setEstado("ce");
// $aeroporto->setCep('631900000');
// $aeroportodao->create($aeroporto);
// foreach($aeroportodao->read() as $aeroporto){
//     echo $aeroporto['nome']."<br/>";
//     echo $aeroporto['cidade']."<br/>";
//     echo $aeroporto['estado']."<br/>";
//     echo $aeroporto['cep']."<br/>";
// }
// $aeroportodao->update($aeroporto);
// $aeroportodao->delete(5);






// $passagem = new Passagem();
// $passagemDAO = new PassagemDAO();

// $passagem->setCodigoAssento(2);
// $passagem->setIdPassageiro(1);

// $passagemDAO->create($passagem);


// $passageiroDAO = new PassageiroDAO();
// $passageiro = new Passageiro();
// $passageiro->setId(3);
// $passageiro->setCpf("09328329320");
// $passageiro->setDataNascimento('1990-09-14');
// $passageiro->setNome("Ana Lívia Alves");
// $passageiro->setEmail("laviaaraujo.dev@gmail.com");
// $passageiro->setTelefone("88992232345");

// $passageiroDAO->create($passageiro);



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
