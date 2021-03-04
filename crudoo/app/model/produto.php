<?php
namespace app\model;
class produto{
    private $nome;
    private $descricao;
    private $id;
    

    public function getNome(){
        return $this->nome ;
    }
    public function setNome($nome){
        $this->nome = $nome;
    }

    public function getDescricao(){
        return $this->descricao;
    }
    public function setDescricao($descricao)
    {
        $this->descricao = $descricao;
    }

    public function getId(){
        return $this->id ;
    }
    public function setId($id){
        $this->id = $id;
    }
}