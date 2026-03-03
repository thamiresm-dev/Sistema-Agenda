<?php
    require_once("../auth.php");

    $descricao = $_POST['descricao'];
    $id_usuario = $_SESSION['id'];

    $sqlInsert = $conexao->prepare("INSERT INTO lista (descricao, id_usuario) VALUES (?, ?)");
    $sqlInsert->bind_param("si", $descricao, $id_usuario);
    $sqlInsert->execute();
    $sqlInsert->close();

    header("Location: ".URL_BASE."frontend/pages/usuario-logado/lista-afazeres.php");
    exit();
?>