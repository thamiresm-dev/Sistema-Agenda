<?php
    require_once("../../../backend/auth.php");
    
    $id_usuario = $_SESSION['id'];
    $sql = "SELECT * FROM lista WHERE id_usuario = $id_usuario";
    $lista = mysqli_query($conexao, $sql);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Afazeres</title>
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="../../css/lista-afazeres.css">
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
        <p id="nome-pagina">Lista de afazeres</p>
        <?php if(mysqli_num_rows($lista) > 0){ ?>
            <ul>
                <?php while($item = mysqli_fetch_assoc($lista)){ ?>
                    <li>
                        <form action="../../../backend/users/atualizar-item-lista.php" method="post">
                            <input type="hidden" name="id-item" value="<?php echo $item['id_item']; ?>">
                            <input type="checkbox" name="concluido" id="1" onchange="this.form.submit()" <?php echo $item['concluido'] == 1 ? 'checked' : '' ?>>
                            <label for=""><?php echo $item['descricao']; ?></label>
                        </form>
                        <a href="../../../backend/users/excluir-item-lista.php?id_item=<?php echo $item['id_item']; ?>"><img src="../../img/lixeira.png" alt="Ícone de lixo" class="icone-lixo"></a>
                    </li>
                <?php } ?>
            </ul>
        <?php } ?>
        <a href="criar-item-lista.php" id="link-icone-add"><img src="../../img/add.png" alt="Ícone de adicionar novo item"></a>
    </main>
    <script src="../../js/menu-dropdown.js"></script>
    <script src="../../js/confirma-exclusao-conta.js"></script>
</body>
</html>