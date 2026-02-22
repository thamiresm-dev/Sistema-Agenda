<?php
    session_start();

    if(!isset($_SESSION['email'])){
        header('Location: login.html');
        exit();
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu Principal</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/menu-principal.css">
</head>
<body>
    <header>
        <img src="../img/profile.png" alt="Ícone de perfil">
    </header>
    <main>
        <div class="option">
            <a href="minhas-tarefas.php">Minhas tarefas</a>
        </div>
        <div class="option">
            <a href="anotacoes.php">Anotações</a>
        </div>
        <div class="option">
            <a href="lista-afazeres.php">Lista de afazeres</a>
        </div>
    </main>
</body>
</html>