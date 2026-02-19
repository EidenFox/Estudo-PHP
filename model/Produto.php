<?php

class Produto{
    public $id;
    public $nome;
    public $descricao;
    public $preco;
    public $estoque;
    public Categoria $categoria_id;

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
        
        public function setPreco($preco){
            $this->preco = $preco;
        }

        public function setEstoque($estoque){
            $this->estoque = $estoque;
        }
        
        public function setCategoria_id(Categoria $categoria_id){
            $this->categoria_id = $categoria_id;
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
        
        public function getPreco(){
            return $this->preco;
        }
       
        public function getEstoque(){
            return $this->estoque;
        }
        
        public function getCategoria_id(){
            return $this->categoria_id;
        }


        
}