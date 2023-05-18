<?php

$idAeroporto = $_POST['idAeroporto'];

require_once "../backend/dao/AeroportoDAO.php";
require_once "../backend/model/Aeroporto.php";
require_once "../backend/config/Conexao.php";

$aeroporto = new Aeroporto();
$aeroportodao = new AeroportoDAO();


$aeroportodao->delete($idAeroporto);
