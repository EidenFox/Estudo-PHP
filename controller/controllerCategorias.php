<?php

//isset() = verifica se a variavel existe no array POST ou GET ou ...
//empty() = verifica se a variavel está vazia

require_once '../model/Categoria.php';
include '../dao/DaoCategorias.php';



$dao = new DaoCategorias();
if($_SERVER["REQUEST_METHOD"] == "POST"){
    if(
        isset($_POST["acao"])
    ){
        $nome = $_POST["nome"];
        $categoria1 = new Categoria();
        
        if ($_POST["acao"] == "create"){
            if( isset($_POST["nome"]) &&
                !empty($_POST["nome"])
            ){
            
            $categoria1->setNome($nome);

            if($dao -> create($categoria1)){
                // debolber com o header (location com mensagem de sucesso)
                echo "Categoria " . $categoria1->getNome() . "cadastrada com sucesso!!";
            }else{
                echo "Erro ao cadastrar categoria!";
            }
            }
        }elseif($_POST["acao"] == "update"){

            if(isset($_POST["nome"]) && !empty($_POST["nome"]) && isset($_POST["id"]) && !empty($_POST["id"])){
                $id = $_POST["id"];
                $nome = $_POST["nome"];
                $categoria1->setID($id);
                $categoria1->setNome($nome);

                if($dao->update($categoria1)){
                    echo "Categoria ". $categoria1->getNome() ." Atualizada! UwU";
                    header("Location: ../controller/controllerCategorias.php?acao=listAll&msg=update");
                }else{
                echo "Deu errado meu parceiro !-!";
            }

        }elseif($_POST["acao"] == "delete"){
            if( isset($_POST["id"]) && !empty($_POST["id"])){
                $id = $_POST["id"];

                $dao->delete($id);
                echo "deletado!";
        }
            exit;

        }
    }elseif($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["acao"]) && !empty($_GET["acao"])){
        if($_GET["acao"]=='listAll'){
            echo "aki!";exit;
            $categorias = $dao->listAll();

            include ('../view/categorias/listarCategorias.php');

        }elseif($_GET["acao"]=='editar' && isset($_GET["id"]) && !empty($_GET["id"])){
            if(is_numeric($_GET["id"])){
                $id = $_GET["id"];
                $categoria = $dao->buscarPorId($id);
                require_once("../view/categorias/formEditarCategoria.php");
            }else{
                echo "Identificador inválido '-' Tente novamente O_O";
            }
        }
    }
}
}