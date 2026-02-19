<?php

class Categoria{
    public $id;
    public $nome;
    public $descricao;

    /**
     * Setters
     */
    public function setID($id){
        $this->id = $id;
    }

    public function setNome($nome){
        $this->nome = $nome;
    }

    public function setDescricao($descricao){
        $this->descricao = $descricao;
    }

    /**
     * Getters
     */
    public function getID(){
        return $this->id;
    }

    public function getNome(){
        return $this->nome;
    }
    
    public function getDescricao(){
        return $this->descricao;
    }


}