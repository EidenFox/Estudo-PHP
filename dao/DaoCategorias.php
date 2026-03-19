<?php

require_once '../config/Database.php';
require_once '../model/Categoria.php';

class DaoCategorias{

private $conn;
    public function __construct(){
        $this->conn = Database::connect();
    }

    public function create(Categoria $categoria){

        $sql = "INSERT INTO categorias (nome) VALUES (:nome)";

        $stmt = $this->conn->prepare($sql);
        
        return $stmt->execute([
            ':nome'=>$categoria->getNome()
        ]);

        exit;
    }

    public function listAll(){
        $sql = "SELECT * FROM categorias ORDER BY nome  ASC";

        $stmt = $this->conn->query($sql);

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function buscarPorId($id){
        
        $sql = "SELECT * FROM categorias WHERE id = :id";

        $stmt = $this->conn->prepare($sql);
        
        $stmt->execute([
            ':id'=>$id
        ]);

        $dados = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($dados){
            $categoria = new Categoria();
            $categoria->setID($dados['id']);
            $categoria->setNome($dados['nome']);
            return $categoria;
        }
        return null;

    }

    public function update($categoria){
        $sql = "UPDATE categorias set nome = :nome WHERE id = :id";
        $stmt = $this->conn->prepare($sql);
        return $stmt->execute([
            ':id'=>$categoria->getID(),
            ':nome'=> $categoria->getNome()
        ]);

        
    }

    public function delete($categoria){
    $sql = "DELETE FROM categorias WHERE id = :id";
    $stmt = $this->conn->prepare($sql);
    return $stmt->execute([
        ':id'=>$categoria->getID()
    ]);

        
    }



}