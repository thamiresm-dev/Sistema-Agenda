<?php
    session_start();
    include_once("../conexao.php");

    $id_tarefa = $_GET['id_tarefa'];
    $sql = "DELETE FROM tarefas WHERE id_tarefa = $id_tarefa";
    $result = mysqli_query($conexao, $sql);
    
    header("Location: ../../frontend/pages/usuario-logado/minhas-tarefas.php");
    exit();
?>