<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Produtos</title>
     <link rel="stylesheet" href="./style.css">
</head>
<body>

    <form action ="../controller/controllerProdutos.php" method="POST">    
        <div>
            <h1>Cadastro de Produtos</h1>
            <p>Informe todos os campos solicitados.</p>
        </div>
        <div>
            <label for="nome">Nome</label>
            <input type="text" name="nome" id="nome">
        </div>
        <div>
            <label for="descricao">Descrição</label>
            <textarea name="descricao" id="descricao"></textarea>
        </div>
        <div>
            <label for="preco">Preço</label>
            <input type="text" name="preco" id="preco">
        </div>
        <div>
            <label for="estoque">Estoque</label>
            <input type="text" name="estoque" id="estoque">
        </div>

        <div>
            <select name="categoria" id="categoria">
                <option value="1">Bolos</option>
                <option value="2">Tortas</option>
                <option value="3">Biscoitos</option>
                <option value="4">Cupcakes</option>
                <option value="5">Bebidas</option>
            </select>
        </div>

        <input type="hidden" name="acao" value="create">
        <div>
            <input type="submit" value="Cadastrar"  class="btn-submit">
        </div>


    </form>
</body>
</html>