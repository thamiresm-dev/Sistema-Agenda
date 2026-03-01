<?php
    session_start();
    include_once("../../../backend/conexao.php");

    if(!isset($_SESSION['email'])){
        header('Location: ../login.html');
        exit();
    }

    $id_tarefa = $_GET['id_tarefa'];
    $sql = "SELECT * FROM tarefas WHERE id_tarefa = $id_tarefa";
    $tarefa = mysqli_query($conexao, $sql);
    $dados_tarefa = mysqli_fetch_assoc($tarefa);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar tarefa</title>
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="../../css/criar.css">
</head>
<body>
    <header>
        <a href="minhas-tarefas.php">
            <img src="../../img/seta-esquerda.png" alt="Voltar ícone">
        </a>
    </header>
    <main>
        <form action="../../../backend/users/editar-tarefa.php" method="post">
            <input type="hidden" name="id-tarefa" value="<?php echo $dados_tarefa['id_tarefa']; ?>">
            <label for="titulo">Título:</label>
            <input type="text" name="titulo" id="titulo" value="<?php echo $dados_tarefa['titulo']; ?>">
            <label for="descricao">Descrição:</label>
            <textarea name="descricao" id="descricao" cols="30" rows="10"><?php echo $dados_tarefa['descricao']; ?></textarea>
            <label for="data">Data de conclusão:</label>
            <input type="date" name="data" id="data" value="<?php echo $dados_tarefa['data']; ?>">
            <button type="submit">Criar</button>
        </form>
    </main>
</body>
</html>