<?php
    session_start();
    include_once("../../../backend/conexao.php");

    if(!isset($_SESSION['email'])){
        header('Location: ../login.html');
        exit();
    }
    
    $id_usuario = $_SESSION['id'];
    $sql = "SELECT * FROM tarefas WHERE id_usuario = $id_usuario";
    $tarefas = mysqli_query($conexao, $sql);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Minhas tarefas</title>
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="../../css/minhas-tarefas.css">
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
        <p id="nome-pagina">Minhas tarefas</p>
        <?php if(mysqli_num_rows($tarefas) > 0){ ?>
            <div class="tarefas">
                <?php while($tarefa = mysqli_fetch_assoc($tarefas)){ ?>
                <div class="tarefa">
                    <a href="detalhes-tarefa.php?id_tarefa=<?php echo $tarefa['id_tarefa']; ?>" id="link-tarefa">
                        <p><?php echo $tarefa['titulo']; ?></p>
                    </a>   
                    <a href="../../../backend/users/excluir-tarefa.php?id_tarefa=<?php echo $tarefa['id_tarefa']; ?>"><img src="../../img/lixeira.png" alt="Ícone de lixo" class="icone-lixo"></a>
                </div>
                <?php } ?>
            </div>
        <?php } ?>
        <a href="criar-tarefa.php" id="link-icone-add"><img src="../../img/add.png" alt="Ícone de adicionar nova tarefa"></a>
    </main>
    <script src="../../js/menu-dropdown.js"></script>
    <script src="../../js/confirma-exclusao-conta.js"></script>
</body>
</html>