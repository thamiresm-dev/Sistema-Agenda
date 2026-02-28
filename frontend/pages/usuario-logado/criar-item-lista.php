<?php
    session_start();

    if(!isset($_SESSION['email'])){
        header('Location: ../login.html');
        exit();
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criar anotação</title>
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="../../css/criar.css">
</head>
<body>
    <header>
        <a href="lista-afazeres.php">
            <img src="../../img/seta-esquerda.png" alt="Voltar ícone">
        </a>
    </header>
    <main>
        <form action="../../../backend/users/add-item-lista.php" method="post">
            <label for="descricao">Descrição:</label>
            <input type="text" name="descricao" id="descricao">
            <button type="submit">Criar</button>
        </form>
    </main>
</body>
</html>