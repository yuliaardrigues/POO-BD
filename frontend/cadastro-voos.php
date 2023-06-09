<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous" />

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

  <title>Document</title>
</head>

<body>
  <header class="container">
    <nav class="bg-primary mx-5 mt-5 py-1 pt-3 rounded-pill">
      <ul class="list-unstyled d-flex jus tify-content-around" id="pills-tab" role="tablist">
        <li class="nav-item" role="presentation">
          <a href="./cadastro-aviao.php" class="text-decoration-none text-dark fs-3">Avião</a>
        </li>
        <li class="nav-item" role="presentation">
          <a href="./cadastro-aeroporto.php" class="text-decoration-none text-dark fs-3">Aeroporto</a>
        </li>
        <li class="nav-item" role="presentation">
          <a href="#" class="text-decoration-none text-dark fs-3">Voo</a>
        </li>
      </ul>
    </nav>
  </header>

  <div class="container mt-5">
    <div class="tab-pane" id="pills-voos" role="tabpanel" aria-labelledby="pills-voos-tab" tabindex="0">
      <h2 class="text-center">Cadastrar voos</h2>
      <form class="d-flex flex-column mb-3" style="margin-left: 30%; margin-right: 35%" method="POST">
        <div>
          <label for="exampleInputNome" class="form-label">Aeroporto de saida:</label>
          <select class="form-select" aria-label="select example" name="aeroporto-saida">
            <option selected></option>
            <?php
            require_once "../backend/dao/AeroportoDAO.php";
            require_once "../backend/model/Aeroporto.php";
            require_once "../backend/config/Conexao.php";

            $aeroporto = new Aeroporto();
            $aeroportodao = new AeroportoDAO();

            foreach ($aeroportodao->read() as $aeroporto) {
              $id = $aeroporto['idAeroporto'];
              $nome = $aeroporto['nome'];
              $cep = $aeroporto['cep'];
              $cidade = $aeroporto['cidade'];
              $estado = $aeroporto['estado'];

              echo '<option value="' . $id . '">' . $nome . '</option>';
            }
            ?>
          </select>
        </div>

        <div>
          <label for="exampleInputHPartida" class="form-label">Horário de partida:</label>
          <input type="text" class="form-control" style="width: 60%" id="exampleInputHPartida" name="horario-partida" />
        </div>

        <div>
          <label for="exampleInputNome" class="form-label">Aeroporto de chegada:</label>
          <select class="form-select" aria-label="select example" name="aeroporto-chegada">
            <option selected></option>
            <?php
            require_once "../backend/dao/AeroportoDAO.php";
            require_once "../backend/model/Aeroporto.php";
            require_once "../backend/config/Conexao.php";

            $aeroporto = new Aeroporto();
            $aeroportodao = new AeroportoDAO();

            foreach ($aeroportodao->read() as $aeroporto) {
              $id = $aeroporto['idAeroporto'];
              $nome = $aeroporto['nome'];
              $cep = $aeroporto['cep'];
              $cidade = $aeroporto['cidade'];
              $estado = $aeroporto['estado'];

              echo '<option value="' . $id . '">' . $nome . '</option>';
            }
            ?>
          </select>
        </div>

        <div>
          <label for="exampleInputChegadda" class="form-label">Horário de chegada:</label>
          <input type="text" class="form-control" style="width: 60%" id="exampleInputChegadda" name="horario-chegada" />
        </div>

        <div>
          <label for="exampleInputAviao" class="form-label">Avião do voo:</label>
          <select class="form-select" aria-label=" select example" name="aviao">
            <option selected></option>
            <?php

            require_once "../backend/dao/AviaoDAO.php";
            require_once "../backend/model/Aviao.php";
            require_once "../backend/config/Conexao.php";

            $aviao = new Aviao();
            $aviaodao = new AviaoDAO();

            foreach ($aviaodao->read() as $aviao) {
              $id = $aviao['idAviao'];
              $capacidade = $aviao['capacidade'] . "<br/>";
              $modelo = $aviao['modelo'] . "<br/>";
              $fabricante = $aviao['fabricante'] . "<br/>";
              echo  '<option value="' . $id . '">' . $modelo . '</option>';
            }

            ?>


          </select>
        </div>

        <div class="d-flex justify-content-end" style="margin-top: 5%">
          <button type="button" class="btn btn-danger" style="margin-right: 3%">
            cancelar
          </button>
          <input type="submit" class="btn btn-success" value="salvar">
        </div>
      </form>

      <?php

      require_once "../backend/dao/VooDAO.php";
      require_once "../backend/model/Voo.php";
      require_once "../backend/config/Conexao.php";

      $voo = new Voo();
      $vooDAO = new VooDAO();

      if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (!empty($_POST['aeroporto-saida'])) {
          $aeroportoSaida = $_POST['aeroporto-saida'];
          $aeroportoChegada = $_POST['aeroporto-chegada'];
          $aviao = $_POST['aviao'];
          $horarioPartida = $_POST['horario-partida'];
          $horarioChegada = $_POST['horario-chegada'];

          $voo->setIdAeroportoPartida(intval($aeroportoSaida));
          $voo->setIdAeroportoChegada(intval($aeroportoChegada));
          $voo->setIdAviao(intval($aviao));
          $voo->setHorarioPartida($horarioPartida);
          $voo->setHorarioChegada($horarioChegada);

          $vooDAO->create($voo);
        } else {
          echo "O campo 'teste' está vazio.";
        }
      }


      ?>

      <h2 class="text-center">Voos cadastrados</h2>

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
              <hr style="width: 60%; margin-left: 20%" />
              <div class="d-flex justify-content-between" style="margin-left: 20%; margin-right: 20%">
                <div>
                  <p>' . $cidadeS . ' para ' . $cidadeC . '</p>
                </div>
                <div>
                  <button class="btn btn-secondary">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                      <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                      <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                    </svg>
                  </button>
                  <button type="button" class="btn btn-secondary" onclick="deletarVoo(' . $idVoo . ')">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                      <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6Z" />
                      <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1ZM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118ZM2.5 3h11V2h-11v1Z" />
                    </svg>
                  </button>
                </div>
              </div>
              
              ';
      }


      ?>
      <hr style="width: 60%; margin-left: 20%" />
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script type="text/javascript">
    function deletarVoo(idVoo) {
      $.ajax({
        url: 'deletarVoo.php',
        type: 'POST',
        data: {
          idVoo: idVoo
        },
        success: function(response) {
          console.log(response);
        },
        error: function(xhr, status, error) {
          console.error(error);
        }
      });
    }
  </script>


</body>

</html>