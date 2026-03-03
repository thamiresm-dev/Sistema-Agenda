<?php
    require_once("../../../backend/auth.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu Principal</title>
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="../../css/menu-principal.css">
</head>
<body>
    <header>
        <div class="perfil-container">
            <img src="../../img/profile.png" alt="Ícone de perfil" onclick="exibirMenu()">
            <div class="menu-perfil">
                <a href="../../../backend/users/logout.php">Sair</a>
                <a href="" onclick="confirmaExclusaoConta()">Apagar conta</a>
            </div>
        </div>
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
    <script src="../../js/menu-dropdown.js"></script>
    <script src="../../js/confirma-exclusao-conta.js"></script>
</body>
</html>