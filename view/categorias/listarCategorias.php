<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar Categorias</title>
</head>

<body>
    <h1>listarCategorias</h1>
<!-- receber mensagem e imprimir sucesso na tela -->

<?php 
if(isset($_GET["msg"])){
    if($_GET["msg"] == "create"){
    ?>
        <div>
            Criado com sucesso
        </div>
    <?
    }
    
    if($_GET["msg"] == "update"){
    ?>
        <div>
            Atualizado com sucesso
        </div>
    <?
    }
    if($_GET["msg"] == "delete"){
    ?>
        <div>
            Removido com sucesso
        </div>
    <?
    }
    if($_GET["msg"] == "error"){
    ?>
        <div>
            Errou!!!
        </div>
    <?
    }
    }
?>

    <table border='1'>
        <th>ITEM</th>
        <th>CÓDIGO</th>
        <th>NOME</th>
        <th>AÇÃO</th>


        <?php
        $i = 1;
        foreach ($categorias as $itemCategoria) {
        ?>
            <tr>
                <td><?= $i++; ?></td>
                <td><?= $itemCategoria['id']; ?></td>
                <td><?= $itemCategoria['nome']; ?></td>
                <td>
                    <a href="../controller/controllerCategorias.php?acao=editar&id=<?= $itemCategoria['id']; ?>">[EDITAR]</a>
                    <form action="../controller/controllerCategorias.php" method="POST">
                        <input type="hidden" name="id" value="<?= $itemCategoria['id']; ?>">
                        <input type="hidden" name="acao" value="delete">
                        <button type="submit" onclick="return confirm('Você está certo disso amigo? ?-?');">EXCLUIR</button>

                    </form>
                </td>
            </tr>
        <?php
        }
        ?>
    </table>

</body>

</html>