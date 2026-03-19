<?php

require_once '../config/Database.php';
require_once '../model/Produto.php';

class DaoProdutos{

private $conn;
    public function __construct(){
        $this->conn = Database::connect();
    }

    public function create(Produto $produto){

        $sql = "INSERT INTO Produtos (nome, descricao, preco, estoque, idCategoria) VALUES (:nome, :descricao, :preco, :estoque, :idCategoria)";

        $stmt = $this->conn->prepare($sql);
        
        return $stmt->execute([
            ':nome'=>$produto->getNome(),
            ':descricao'=>$produto->getDescricao(),
            ':preco'=>$produto->getPreco(),
            ':estoque'=>$produto->getEstoque(),
            ':idCategoria'=>$produto->getCategoria_id()->getID()
        ]);

        exit;
    }


    public function update($produto){
        $sql = "UPDATE produtos set nome = :nome, descricao = :descricao, preco = :preco, estoque = :estoque WHERE id = :id";
        $stmt = $this->conn->prepare($sql);
        return $stmt->execute([
            ':nome'=>$produto->getNome(),
            ':descricao'=>$produto->getDescricao(),
            ':preco'=>$produto->getPreco(),
            ':estoque'=>$produto->getEstoque(),
            ':idCategoria'=>$produto->getCategoria_id()->getID()
        ]);
    }

    public function delete($produto){
        $sql = "DELETE FROM produtos WHERE id = :id";
        $stmt = $this->conn->prepare($sql);
        return $stmt->execute([
            ':id'=>$produto->getID()
        ]);
    }

}