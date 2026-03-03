<?php
    require_once("../../../backend/auth.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criar tarefa</title>
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
        <form action="../../../backend/users/add-tarefa.php" method="post">
            <label for="titulo">Título:</label>
            <input type="text" name="titulo" id="titulo">
            <label for="descricao">Descrição:</label>
            <textarea name="descricao" id="descricao" cols="30" rows="10"></textarea>
            <label for="data">Data de conclusão:</label>
            <input type="date" name="data" id="data">
            <button type="submit">Criar</button>
        </form>
    </main>
</body>
</html>