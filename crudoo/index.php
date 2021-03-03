<?php
require_once 'vendor/autoload.php';

$produto = new \app\model\produto();

$produto->setNome('');
$produto->setDescricao('');

$produtoDao = new \app\model\produtoDao();
$produtoDao->read();

foreach($produtoDao->read() as $produto):
	echo $produto['nome']."<br>".$produto['descricao']."<hr>";
endforeach;

$produtoDao->delete();
