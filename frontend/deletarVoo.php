<?php
$idVoo = $_POST['idVoo'];


require_once "../backend/dao/VooDAO.php";
require_once "../backend/model/Voo.php";
require_once "../backend/config/Conexao.php";

$voo = new Voo();
$vooDAO = new VooDAO();

$vooDAO->delete($idVoo);
