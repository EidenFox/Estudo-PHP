<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Categorias</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>

    <form action ="../controller/controllerCategorias.php" method="POST">    
        <div>
            <h1>Cadastro de Categoria</h1>
            <p>Informe todos os campos solicitados.</p>
        </div>
        <div>
            <label for="nome">Nome</label>
            <input type="text" name="nome" id="nome">
        </div>
        <div>
            <label for="descricao">Descrição</label>
            <input type="text" name="descricao" id="descricao">
        </div>
        <input type="hidden" name="acao" value="create">
        <div>
            <input type="submit" value="Cadastrar" class="btn-submit">
        </div>


    </form>
</body>
</html>