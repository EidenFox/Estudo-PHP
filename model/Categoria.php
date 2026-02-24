<?php

class Categoria{
    public $id;
    public $nome;

    /**
     * Setters
     */
    public function setID($id){
        $this->id = $id;
    }

    public function setNome($nome){
        $this->nome = $nome;
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


}