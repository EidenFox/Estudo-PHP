<?php

include './model/Produto.php';
include './model/Categoria.php';

$produto1 = new Produto();
$categoria1 = new Categoria();

$categoria1->setID(1);
$categoria1->setNome("Doces");
$categoria1->setDescricao("Doces e balas em geral");

$produto1->setID(1);
$produto1->setNome("Barra de Chocolate");
$produto1->setDescricao("Barra de chocolate 50% cacau da marca menino");
$produto1->setPreco(9.45);
$produto1->setEstoque(4);
$produto1->setCategoria_id($categoria1);