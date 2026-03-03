<?php
    require_once("../../../backend/auth.php");
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
        <a href="anotacoes.php">
            <img src="../../img/seta-esquerda.png" alt="Voltar ícone">
        </a>
    </header>
    <main>
        <form action="../../../backend/users/add-anotacao.php" method="post">
            <label for="titulo">Título:</label>
            <input type="text" name="titulo" id="titulo">
            <label for="conteudo">Conteúdo:</label>
            <textarea name="conteudo" id="conteudo" cols="30" rows="10"></textarea>
            <button type="submit">Criar</button>
        </form>
    </main>
</body>
</html>