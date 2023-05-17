<?php
// Recuperar a variável enviada via POST
$idAviao = $_POST['idAviao'];

require_once "../backend/dao/AviaoDAO.php";
require_once "../backend/model/Aviao.php";
require_once "../backend/config/Conexao.php";

$aviao = new Aviao();
$aviaodao = new AviaoDAO();

$aviaodao->delete($idAviao);
?>
