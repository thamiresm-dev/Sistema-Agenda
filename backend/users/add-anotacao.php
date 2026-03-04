<?php
    require_once("../auth.php");

    $titulo = $_POST['titulo'];
    $conteudo = $_POST['conteudo'];
    $id_usuario = $_SESSION['id'];

    $sqlInsert = $conexao->prepare("INSERT INTO anotacoes (titulo, conteudo, id_usuario) VALUES (?, ?, ?)");
    $sqlInsert->bind_param("ssi", $titulo, $conteudo, $id_usuario);
    $sqlInsert->execute();
    $sqlInsert->close();

    header("Location: ".URL_BASE."frontend/pages/usuario-logado/anotacoes.php");
    exit();
?>