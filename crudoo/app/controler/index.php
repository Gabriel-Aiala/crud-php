<?php
require_once '../../vendor/autoload.php';

include '../view/cabecalho.php';
include '../view/listagem.php';
$produtoDao = new \app\model\produtoDao();
$produtoDao->read();

foreach($produtoDao->read() as $produto):
	echo $produto['id']."<br>".$produto['nome']."<br>".$produto['descricao']. "<hr>";
endforeach;
include '../view/rodape.php';







/*
$produto = new \app\model\produto();

$produto->setNome('');
$produto->setDescricao('');

$produtoDao = new \app\model\produtoDao();
$produtoDao->read();

foreach($produtoDao->read() as $produto):
	echo $produto['nome']."<br>".$produto['descricao']."<hr>";
endforeach;

$produtoDao->delete();
*/ 