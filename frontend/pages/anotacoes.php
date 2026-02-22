<?php
    session_start();

    if(!isset($_SESSION['email'])){
        header('Location: login.html');
        exit();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anotações</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/anotacoes.css">
</head>
<body>
      <header>
        <a href="menu-principal.php">Menu principal</a>
        <img src="../img/profile.png" alt="Ícone de perfil">
    </header>
    <main>
        <p id="nome-pagina">Anotações</p>
        <div class="anotacoes">
            <div class="nota">
                <p>Sobre o trabalho de Engenharia de Software</p>
            </div>
            <div class="nota">
                <p>Sobre o trabalho de Sistemas Operacionais</p>
            </div>
            <div class="nota">
                <p>Sobre o trabalho de Sistemas Operacionais</p>
            </div>
            <div class="nota">
                <p>Sobre o trabalho de Sistemas Operacionais</p>
            </div>
            <div class="nota">
                <p>Sobre o trabalho de Sistemas Operacionais</p>
            </div>
            <div class="nota">
                <p>Sobre o trabalho de Sistemas Operacionais</p>
            </div>
        </div>
        <img src="../img/add.png" alt="Ícone de adicionar nova anotação" id="icone-add">
    </main>
</body>
</body>
</html>