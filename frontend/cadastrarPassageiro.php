<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous" />
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  <title>Comprar passagem</title>
</head>

<body>
  <h1 class="text-center" style="margin-top: 5%">Comprar passagens</h1>

  <form class="d-flex flex-column mb-3" style="margin-left: 30%; margin-right: 35%;" method="POST">
    <label for="exampleInputVoos" class="form-label">Voos Disponíveis</label>
    <select class="form-select" aria-label="select example" id="exampleInputVoosl" name="voo">
      <option selected></option>
      <?php

      require_once "../backend/dao/VooDAo.php";
      require_once "../backend/model/Voo.php";
      require_once "../backend/config/Conexao.php";

      $vooDAO = new VooDAO();
      $voo = new Voo();

      foreach ($vooDAO->read() as $voo) {
        $idVoo = $voo['idVoo'];
        $horarioPartida = $voo['horarioPartida'];
        $horarioChegada = $voo['horarioChegada'];
        $idAeroportoChegada = $voo['idAeroportoChegada'];
        $idAeroportoSaida = $voo['idAeroportoSaida'];
        $idAviao = $voo['idAviao'];

        require_once "../backend/dao/AeroportoDAO.php";
        require_once "../backend/model/Aeroporto.php";

        $aeroportoChegada = new Aeroporto();
        $aeroportoSaida = new Aeroporto();
        $aeroportodao = new AeroportoDAO();

        foreach ($aeroportodao->readAeroporto($idAeroportoChegada) as $aeroporto) {
          $idC = $aeroporto['idAeroporto'];
          $nomeC = $aeroporto['nome'];
          $cepC = $aeroporto['cep'];
          $cidadeC = $aeroporto['cidade'];
          $estadoC = $aeroporto['estado'];
        }

        foreach ($aeroportodao->readAeroporto($idAeroportoSaida) as $aeroporto) {
          $idS = $aeroporto['idAeroporto'];
          $nomeS = $aeroporto['nome'];
          $cepS = $aeroporto['cep'];
          $cidadeS = $aeroporto['cidade'];
          $estadoS = $aeroporto['estado'];
        }
        echo  '
  <option value="' . $idVoo . '">' . $cidadeS . ' para ' . $cidadeC . '</option>
  ';
      }
      ?>
    </select>
    </div>
    </div>
    <h3 class="text-center" style="margin-top: 3%">Cadastrar o passageiro</h3>
    <div>
      <label for="exampleInputNome" class="form-label">Nome do passageiro</label>
      <input type="text" class="form-control" style="width: 120%;" id="exampleInputNome" name="nome">
    </div>

    <div>
      <label for="exampleInputCPF" class="form-label">CPF</label>
      <input type="text" class="form-control" style="width: 60%;" id="exampleInputCPF" name="cpf">
    </div>

    <div>
      <label for="exampleInputDataNasc" class="form-label">Data de nascimento</label>
      <input type="date" class="form-control" style="width: 50%;" id="exampleInputDataNasc" name="dataNasc">
    </div>

    <div>
      <label for="exampleInputEmail" class="form-label">Email</label>
      <input type="text" class="form-control" style="width: 120%;" id="exampleInputEmail" name="email">
    </div>

    <div>
      <label for="exampleInputPhone" class="form-label">Telefone</label>
      <input type="text" class="form-control" style="width: 60%;" id="exampleInpuPhone" name="telefone">
    </div>

    <div class="d-flex justify-content-end" style="margin-top: 5%;">
      <button type="button" class="btn btn-danger" style="margin-right: 3%;">cancelar</button>
      <input type="submit" class="btn btn-success" value="salvar" />
    </div>
  </form>

  <?php

  require_once "../backend/dao/PassageiroDAO.php";
  require_once "../backend/model/Passageiro.php";
  require_once "../backend/dao/PassagemDAO.php";
  require_once "../backend/model/Passagem.php";

  require_once "../backend/config/Conexao.php";

  $passageiro = new Passageiro();
  $passageiroDAO = new PassageiroDAO();


  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!empty($_POST['nome'])) {
      $voo = $_POST['voo'];
      $nome = $_POST['nome'];
      $cpf = $_POST['cpf'];
      $data = $_POST['dataNasc'];
      $email = $_POST['email'];
      $telefone = $_POST['telefone'];

      echo $voo;
      
      $passageiro->setCpf($cpf);
      $passageiro->setDataNascimento($data);
      $passageiro->setNome($nome);
      $passageiro->setEmail($email);
      $passageiro->setTelefone($telefone);

      $passageiroDAO->create($passageiro);


      $passagem = new Passagem();
      $passagemDAO = new PassagemDAO();

      $passagem->setIdVoo($idVoo);
      $passagem->setIdPassageiro(1);

      $passagemDAO->create($passagem);
    } else {
      echo "O campo 'teste' está vazio.";
    }
  }
  ?>

</body>

</html>
