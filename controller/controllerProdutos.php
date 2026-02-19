<?php

//isset() = verifica se a variavel existe no array POST ou GET ou ...
//empty() = verifica se a variavel está vazia

/**
 * Categoria temporária pois ainda esta em fase de testes
 */
include '../model/Categoria.php';
$categoria1 = new Categoria();
$categoria1->setID(1);
$categoria1->setNome("Bolos");
$categoria1->setDescricao("Bolos e shortcakes em geral");





include '../model/Produto.php';
if($_POST){
    if(
        isset($_POST["nome"]) &&
        isset($_POST["descricao"]) &&
        isset($_POST["preco"]) &&
        isset($_POST["estoque"]) &&
        isset($_POST["categoria"])&&
        !empty($_POST["nome"]) &&
        !empty($_POST["descricao"])&&
        !empty($_POST["preco"]) &&
        !empty($_POST["estoque"])&&
        !empty($_POST["categoria"])
        
    ){
        $nome = $_POST["nome"];
        $descricao = $_POST["descricao"];
        $preco = $_POST["preco"];
        $estoque = $_POST["estoque"];
        $categoria = $_POST["categoria"];
        
        if ($_POST["acao"] == "create"){
            $produto1 = new Produto();
            $produto1->setID(1);
            $produto1->setNome($nome);
            $produto1->setDescricao($descricao);
            $produto1->setPreco($preco);
            $produto1->setEstoque($estoque);
            $produto1->setCategoria_id($categoria1); //categoria temporária
            
            print_r($produto1);
            var_dump($preco, $estoque, $categoria);

        }

        exit;

    }
}else{
    echo "Formulario não preenchido!";
}