<?php
    require_once("../../../backend/auth.php");

    $id_anotacao = $_GET['id_anotacao'];
    $sql = "SELECT * FROM anotacoes WHERE id_anotacao = $id_anotacao";;
    $anotacao = mysqli_query($conexao, $sql);
    $dados_anotacao = mysqli_fetch_assoc($anotacao);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar anotação</title>
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
        <form action="../../../backend/users/editar-anotacao.php" method="post">
            <input type="hidden" name="id-anotacao" value="<?php echo $dados_anotacao['id_anotacao']; ?>">
            <label for="titulo">Título:</label>
            <input type="text" name="titulo" id="titulo" value="<?php echo $dados_anotacao['titulo']; ?>">
            <label for="conteudo">Conteúdo:</label>
            <textarea name="conteudo" id="conteudo" cols="30" rows="10"><?php echo $dados_anotacao['conteudo']; ?></textarea>
            <button type="submit">Criar</button>
        </form>
    </main>
</body>
</html>