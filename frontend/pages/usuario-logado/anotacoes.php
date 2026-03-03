<?php
    require_once("../../../backend/auth.php");
    
    $id_usuario = $_SESSION['id'];
    $sql = "SELECT * FROM anotacoes WHERE id_usuario = $id_usuario";
    $anotacoes = mysqli_query($conexao, $sql);
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
        <?php if(mysqli_num_rows($anotacoes) > 0){ ?>
            <div class="anotacoes">
                <?php while($nota = mysqli_fetch_assoc($anotacoes)){ ?>
                    <div class="nota">
                        <a href="detalhes-anotacao.php?id_anotacao=<?php echo $nota['id_anotacao']; ?>" id="link-nota">
                            <p><?php echo $nota['titulo']; ?></p>
                        </a>
                    </div>
                <?php } ?>
            </div>
        <?php } ?>
        <a href="criar-anotacao.php" id="link-icone-add"><img src="../../img/add.png" alt="Ícone de adicionar nova anotação" id="icone-add"></a>
    </main>
    <script src="../../js/menu-dropdown.js"></script>
    <script src="../../js/confirma-exclusao-conta.js"></script>
</body>
</html>