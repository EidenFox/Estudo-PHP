<?php


include '../model/Produto.php';
include '../model/Categoria.php';
include '../dao/DaoCategorias.php';
include '../dao/DaoProdutos.php';
$categoriaDao = new DaoCategorias;
$dao = new DaoProdutos();


if($_SERVER["REQUEST_METHOD"] == "POST"){
   
if(
        isset($_POST["acao"])
    ){


        if($_POST){

        if(
            isset($_POST["nome"]) &&
            isset($_POST["preco"]) &&
            isset($_POST["estoque"]) &&
            isset($_POST["categoria_id"])&&
            !empty($_POST["nome"]) &&
            !empty($_POST["preco"]) &&
            !empty($_POST["estoque"])&&
            !empty($_POST["categoria_id"])
            
        ){
            $nome = $_POST["nome"];
            if(!empty($_POST["descricao"])){
                $descricao = $_POST["descricao"];
            }else{
                $descricao = '';
            }
            $preco = $_POST["preco"];
            $estoque = $_POST["estoque"];
            $categoria = $_POST["categoria_id"];


            if ($_POST["acao"] == "create"){

                $produto1 = new Produto();
                $produto1->setID(1);
                $produto1->setNome($nome);
                $produto1->setDescricao($descricao);
                $produto1->setPreco($preco);
                $produto1->setEstoque($estoque);                
                $CategoriaObj = new Categoria();
                $CategoriaObj->setID($categoria);
                $produto1->setCategoria_id($CategoriaObj);
                
                if($dao -> create($produto1)){
                    echo "Produto " . $produto1->getNome() . "cadastrado com sucesso!!";
                }else{
                    echo "Erro ao cadastrar protudo!";
                }

            }

            exit;

        }
        }
    }
}elseif($_GET["acao"] == "createForm"){
    $categoria = $categoriaDao->listAll();
    require_once("../view/produtos/formCadastroProduto.php");
}else{
    echo "Formulario não preenchido!";
}
