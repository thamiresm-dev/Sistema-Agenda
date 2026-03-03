<?php
    require_once("../auth.php");

    $id_tarefa = $_GET['id_tarefa'];
    $id_usuario = $_SESSION['id'];

    $sqlDelete = $conexao->prepare("DELETE FROM tarefas WHERE id_tarefa = ? AND id_usuario = ?");
    $sqlDelete->bind_param("ii", $id_tarefa, $id_usuario);
    $sqlDelete->execute();
    $sqlDelete->close();
    
    header("Location: ".URL_BASE."frontend/pages/usuario-logado/minhas-tarefas.php");
    exit();
?>