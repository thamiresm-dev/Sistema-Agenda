<?php
    require_once("../auth.php");

    $id_anotacao = $_POST['id-anotacao'];
    $titulo = $_POST['titulo'];
    $conteudo = $_POST['conteudo'];

    $sqlUpdate = $conexao->prepare("UPDATE anotacoes SET titulo = ?, conteudo = ? WHERE id_anotacao = ?");
    $sqlUpdate->bind_param("ssi", $titulo, $conteudo, $id_anotacao);
    $sqlUpdate->execute();
    $sqlUpdate->close();

    header("Location: ".URL_BASE."frontend/pages/usuario-logado/anotacoes.php");
    exit();
?>