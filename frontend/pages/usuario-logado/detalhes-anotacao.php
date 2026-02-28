<?php
    session_start();
    include_once("../../../backend/conexao.php");

    if(!isset($_SESSION['email'])){
        header('Location: ../login.html');
        exit();
    }

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
    <title>Criar tarefa</title>
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="../../css/detalhes.css">
</head>
<body>
    <header>
        <a href="anotacoes.php">
            <img src="../../img/seta-esquerda.png" alt="Voltar ícone">
        </a>
    </header>
    <main>
        <form action="" method="">
            <p class="dados" id="titulo"><b><?php echo $dados_anotacao['titulo']; ?></b></p>
            <p class="dados" id="conteudo"><?php echo $dados_anotacao['conteudo']; ?></p>
        </form>
        <a href="../../../backend/users/excluir-anotacao.php?id_anotacao=<?php echo $dados_anotacao['id_anotacao']; ?>"><img src="../../img/lixeira.png" alt="Ícone de lixo" class="icone-lixo"></a>
    </main>
</body>
</html>