<!DOCTYPE html>
<html lang="pt-br">
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
            <label for="categoria_id">Categoria:</label>
            <select name="categoria_id" id="categoria_id" required>

                <?php foreach ($categoria as $itemCategoria): ?>
                    <option value="<?=  $itemCategoria['id']; ?>">
                        <?= htmlspecialchars($itemCategoria['nome']); ?>
                    </option>
                    <?php endforeach; ?>

            </select>

        </div>


        <input type="hidden" name="acao" value="create">
        <div>
            <input type="submit" value="Cadastrar"  class="btn-submit">
        </div>


    </form>
</body>
</html>