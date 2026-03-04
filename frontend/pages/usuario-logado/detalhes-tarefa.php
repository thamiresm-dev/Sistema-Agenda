<?php
    require_once("../../../backend/auth.php");

    $id_tarefa = $_GET['id_tarefa'];
    $sql = "SELECT * FROM tarefas WHERE id_tarefa = $id_tarefa";;
    $tarefa = mysqli_query($conexao, $sql);
    $dados_tarefa = mysqli_fetch_assoc($tarefa);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>detalhes tarefa</title>
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="../../css/detalhes.css">
</head>
<body>
    <header>
        <a href="minhas-tarefas.php">
            <img src="../../img/seta-esquerda.png" alt="Voltar ícone">
        </a>
    </header>
    <main>
        <form action="" method="">
            <label for="titulo">Título:</label>
            <p class="dados" id="titulo"><?php echo $dados_tarefa['titulo']; ?></p>
            <label for="descricao">Descrição:</label>
            <p class="dados" id="descricao"><?php echo $dados_tarefa['descricao']; ?></p>
            <label for="data">Data de conclusão:</label>
            <p class="dados" id="data"><?php echo $dados_tarefa['data']; ?></p>
        </form>
        <a href="editar-tarefa.php?id_tarefa=<?php echo $dados_tarefa['id_tarefa']; ?>" class="icone"><img src="../../img/editar.png" alt="Ícone de editar" class="icone-editar"></a>
    </main>
</body>
</html>