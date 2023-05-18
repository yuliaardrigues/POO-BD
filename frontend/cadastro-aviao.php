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
      <ul class="list-unstyled d-flex justify-content-around" id="pills-tab" role="tablist">
        <li class="nav-item" role="presentation">
          <a href="./cadastro-aviao.php" class="text-decoration-none text-dark fs-3">Avião</a>
        </li>
        <li class="nav-item" role="presentation">
          <a href="./cadastro-aeroporto.php" class="text-decoration-none text-dark fs-3">Aeroporto</a>
        </li>
        <li class="nav-item" role="presentation">
          <a href="./cadastro-voos.php" class="text-decoration-none text-dark fs-3">Voo</a>
        </li>
      </ul>
    </nav>
  </header>

  <div class="container mt-5">
    <div class="tab-pane" id="pills-aviao" role="tabpanel" aria-labelledby="pills-aviao-tab" tabindex="0">
      <h2 class="text-center mb-4">Cadastrar novo avião</h2>

      <form class="d-flex flex-column mb-3" style="margin-left: 30%; margin-right: 35%" method="POST" action="">
        <div>
          <label for="exampleInputModelo" class="form-label">Modelo do avião:</label>
          <input type="text" class="form-control" style="width: 120%" id="exampleInputModelo" name="modelo" />
        </div>

        <div>
          <label for="exampleInputCpacidade" class="form-label">Capacidade</label>
          <input type="number" class="form-control" style="width: 60%" id="exampleInputCpacidade" name="capacidade" />
        </div>

        <div>
          <label for="exampleInputFabricante" class="form-label">Fabricante</label>
          <input type="text" class="form-control" style="width: 120%" id="exampleInputFabricante" name="fabricante" />
        </div>

        <div class="d-flex justify-content-end" style="margin-top: 5%">
          <input type="submit" class="btn btn-success" value="salvar">
        </div>
      </form>

      <?php

      require_once "../backend/dao/AviaoDAO.php";
      require_once "../backend/model/Aviao.php";
      require_once "../backend/config/Conexao.php";

      $aviao = new Aviao();
      $aviaodao = new AviaoDAO();


      if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (!empty($_POST['modelo']) && !empty($_POST['capacidade']) && !empty($_POST['fabricante'])) {
          $aviao->setModelo($_POST['modelo']);
          $aviao->setCapacidade(intval($_POST['capacidade']));
          $aviao->setFabricante($_POST['fabricante']);
          $aviaodao->create($aviao);
        }
      }

      ?>

      <h2 class="text-center">Aviões cadastrados</h2>

      <?php

      require_once "../backend/dao/AviaoDAO.php";
      require_once "../backend/model/Aviao.php";
      require_once "../backend/config/Conexao.php";

      $aviao = new Aviao();
      $aviaodao = new AviaoDAO();

      foreach ($aviaodao->read() as $aviao) {
        $idAviao = $aviao['idAviao'];
        $capacidade = $aviao['capacidade'];
        $modelo = $aviao['modelo'];
        $fabricante = $aviao['fabricante'];
        echo
        '<hr style="width: 60%; margin-left: 20%" />
    <div
      class="d-flex justify-content-between"
      style="margin-left: 20%; margin-right: 20%"
    >
      <div>
        <p>' . $modelo . '</p>
      </div>
      <div>
        <button type="button" class="btn btn-secondary" onclick="deletarAviao(' . $idAviao . ')">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            width="16"
            height="16"
            fill="currentColor"
            class="bi bi-trash"
            viewBox="0 0 16 16"
          >
            <path
              d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6Z"
            />
            <path
              d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1ZM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118ZM2.5 3h11V2h-11v1Z"
            />
          </svg>
        </button>
      </div>
    </div>';
      }


      ?>
      <hr style="width: 60%; margin-left: 20%" />
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script type="text/javascript">
    function deletarAviao(idAviao) {

      console.log(idAviao)

      $.ajax({
        url: 'deletarAviao.php',
        type: 'POST',
        data: {
          idAviao: idAviao
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
