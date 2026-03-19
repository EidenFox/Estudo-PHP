<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edição Categorias</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>

    <form action ="../controller/controllerCategorias.php" method="POST">    
        <div>
            <h1>Editando Categoria</h1>
            <p>Informe todos os campos solicitados.</p>
        </div>
        <div>
            <label for="nome">Nome</label>
            <input type="text" name="nome" value="<?= $categoria->getNome();?>" id="nome">
        </div>
        <input type="hidden" name="acao" value="update">
        <input type="hidden" name="id" value="<?= $categoria->getID();?>">
        <div>
            <input type="submit" value="Atualizar" class="btn-submit">
        </div>


    </form>
</body>
</html>