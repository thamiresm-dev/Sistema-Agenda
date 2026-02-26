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
    <title>Anotações</title>
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="../../css/anotacoes.css">
</head>
<body>
      <header>
        <a href="menu-principal.php" id="menu-principal">Menu principal</a>
        <div class="perfil-container">
            <img src="../../img/profile.png" alt="Ícone de perfil" onclick="exibirMenu()">
            <div class="menu-perfil">
                <a href="../../../backend/users/logout.php">Sair</a>
                <a href="" onclick="confirmaExclusaoConta()">Apagar conta</a>
            </div>
        </div>
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
        <img src="../../img/add.png" alt="Ícone de adicionar nova anotação" id="icone-add">
    </main>
    <script src="../../js/menu-dropdown.js"></script>
    <script src="../../js/confirma-exclusao-conta.js"></script>
</body>
</html>