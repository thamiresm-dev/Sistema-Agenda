<?php
    require_once("../auth.php");

    $id_tarefa = $_POST['id-tarefa'];
    $titulo = $_POST['titulo'];
    $descricao = $_POST['descricao'];
    $data = $_POST['data'];

    $sqlUpdate = $conexao->prepare("UPDATE tarefas SET titulo = ?, descricao = ?, data = ? WHERE id_tarefa = ?");
    $sqlUpdate->bind_param("sssi", $titulo, $descricao, $data, $id_tarefa);
    $sqlUpdate->execute();
    $sqlUpdate->close();

    header("Location: ".URL_BASE."frontend/pages/usuario-logado/detalhes-tarefa.php?id_tarefa=".$id_tarefa);
    exit();
?>