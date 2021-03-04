<?php
namespace app\model;
class produtoDao{
    public function create( produto $e)
    {
        $sql = 'INSERT INTO produtos(nome,descricao) VALUES (?,?)';
        $insert = conexao::getconn()->prepare($sql);
        $insert->bindValue(1,$e->getNome());
        $insert->bindValue(2,$e->getDescricao());

        $insert->execute();
    }
    public function read()
    {
        $sql = 'SELECT * FROM produtos';
        $read =  conexao::getconn()->prepare($sql);
        $read->execute();

        if ($read->rowCount() > 0):
            $resultado = $read->fetchAll(\PDO::FETCH_ASSOC);
            return $resultado;
        else:
            return [];
        endif;
    }
    public function update(produto $e)
    {
        $sql = ' UPDATE produtos SET nome= ? , descricao= ?  WHERE id= ? ';
        $update = conexao::getconn()->prepare($sql);

        $update->bindValue(1, $e->getNome());
        $update->bindValue(2, $e->getDescricao());
        $update->bindValue(3, $e->getId());
        $update->execute();
    }
    public function delete(produto $e)
    {
        $sql = 'DELETE FROM produtos WHERE id = ?';
        $delete = conexao::getconn()->prepare($sql);
        $delete->bindValue(1, $e->getId());
        $delete->execute();
    }

}