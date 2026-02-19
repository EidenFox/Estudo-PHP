<?php

//isset() = verifica se a variavel existe no array POST ou GET ou ...
//empty() = verifica se a variavel está vazia

include '../model/Categoria.php';
if($_POST){
    if(
        isset($_POST["nome"]) &&
        isset($_POST["descricao"]) &&
        !empty($_POST["nome"]) &&
        !empty($_POST["descricao"])
    ){
        $nome = $_POST["nome"];
        $descricao = $_POST["descricao"];
        // echo "<pre>";
        // var_dump($nome, $descricao);
        // echo "</pre>";
        
        if ($_POST["acao"] == "create"){
            
            $categoria1 = new Categoria();
            
            $categoria1->setID(1);
            $categoria1->setNome($nome);
            $categoria1->setDescricao($descricao);
            
            print_r($categoria1);

        }

        exit;

    }
}else{
    echo "Formulario não preenchido!";
}