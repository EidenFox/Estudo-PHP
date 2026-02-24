<?php

require_once '../model/Categoria.php';

class DaoCategorias{
    public function create(Categoria $categoria){
        echo "estamos no metodo CREATE do DAO";
        exit;
    }
}