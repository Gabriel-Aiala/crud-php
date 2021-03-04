<?php
require_once '../../vendor/autoload.php';

include '../view/cabecalho.php';
include '../view/form-remove.php';
if (isset($_POST['id'])) {

    $produto = new \app\model\produto();
    $produto->setId($_POST['id']);
    $produtoDAO = new \app\model\produtoDAO;
    $produtoDAO->delete($produto);



}

include '../view/rodape.php';