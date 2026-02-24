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
    <title>Minhas tarefas</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/minhas-tarefas.css">
</head>
<body>
    <header>
        <a href="menu-principal.php" id="menu-principal">Menu principal</a>
        <div class="perfil-container">
            <img src="../img/profile.png" alt="Ícone de perfil" onclick="exibirMenu()">
            <div class="menu-perfil">
                <a href="../../backend/users/logout.php">Sair</a>
                <a href="">Apagar conta</a>
            </div>
        </div>
    </header>
    <main>
        <p id="nome-pagina">Minhas tarefas</p>
        <div class="tarefas">
            <div class="tarefa">
                <p class="item">Enviar atividade de Sistemas Operacionais</p>
                <img src="../img/lixeira.png" alt="Ícone de lixo" class="icone-lixo">
            </div>
            <div class="tarefa">
                <p class="item">Reunião com a empresa</p>
                <img src="../img/lixeira.png" alt="Ícone de lixo" class="icone-lixo">
            </div>
            <div class="tarefa">
                <p class="item">Fazer trabalho de Engenharia de Software</p>
                <img src="../img/lixeira.png" alt="Ícone de lixo" class="icone-lixo">
            </div>
            <div class="tarefa">
                <p class="item">Terminar curso de inglês</p>
                <img src="../img/lixeira.png" alt="Ícone de lixo" class="icone-lixo">
            </div>
        </div>
        <img src="../img/add.png" alt="Ícone de adicionar nova tarefa" id="icone-add">
    </main>
    <script src="../js/menu-dropdown.js"></script>
</body>
</html>