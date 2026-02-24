<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Categorias</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>

    <form action ="../../controller/controllerCategorias.php" method="POST">    
        <div>
            <h1>Cadastro de Categoria</h1>
            <p>Informe todos os campos solicitados.</p>
        </div>
        <div>
            <label for="nome">Nome</label>
            <input type="text" name="nome" id="nome">
        </div>
        <input type="hidden" name="acao" value="create">
        <div>
            <input type="submit" value="Cadastrar" class="btn-submit">
        </div>


    </form>
</body>
</html>