<?php

//isset() = verifica se a variavel existe no array POST ou GET ou ...
//empty() = verifica se a variavel está vazia

require_once '../model/Categoria.php';
include '../dao/DaoCategorias.php';

$dao = new DaoCategorias();
if($_SERVER["REQUEST_METHOD"] == "POST"){
    if(
        isset($_POST["nome"]) &&
        isset($_POST["acao"]) &&
        !empty($_POST["nome"])
    ){
        $nome = $_POST["nome"];
        
        if ($_POST["acao"] == "create"){
            
            $categoria1 = new Categoria();
            
            $categoria1->setNome($nome);

            if($dao -> create($categoria1)){
                echo "Categoria " . $categoria1->getNome() . "cadastrada com sucesso!!";
            }else{
                echo "Erro ao cadastrar categoria!";
            }

        }

        exit;

    }
}else{
    echo "Formulario não preenchido!";
}