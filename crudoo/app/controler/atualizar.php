<?php
require_once '../../vendor/autoload.php';

include '../view/cabecalho.php';
include '../view/form-att.php';
if (isset($_POST['nome'],$_POST['descricao'],$_POST['id'])) {

$produto = new \app\model\produto();

$produto->setNome($_POST['nome']);
$produto->setDescricao($_POST['descricao']);
$produto->setId($_POST['id']);
$produtoDAO = new \app\model\produtoDao();
$produtoDAO->update($produto);


}

include '../view/rodape.php';