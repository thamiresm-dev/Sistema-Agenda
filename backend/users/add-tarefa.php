<?php
    require_once("../auth.php");

    $titulo = $_POST['titulo'];
    $descricao = $_POST['descricao'];
    $data = $_POST['data'];
    $id_usuario = $_SESSION['id'];

    $sqlInsert = $conexao->prepare("INSERT INTO tarefas (titulo, descricao, data, id_usuario) VALUES (?, ?, ?, ?)");
    $sqlInsert->bind_param("sssi", $titulo, $descricao, $data, $id_usuario);
    $sqlInsert->execute();
    $sqlInsert->close();

    header("Location: ".URL_BASE."frontend/pages/usuario-logado/minhas-tarefas.php");
    exit();
?>