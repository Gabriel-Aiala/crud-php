<?php
include_once '../../vendor/autoload.php';

include '../view/cabecalho.php';




include '../view/formulario.php';
if (isset($_POST['nome'],$_POST['descricao'])) {
 

$produto = new \app\model\produto();

$produto->setNome($_POST['nome']);
$produto->setDescricao($_POST['descricao']);
$produtoDao = new \app\model\produtoDao();
$produtoDao->create($produto);
}
include '../view/rodape.php';
