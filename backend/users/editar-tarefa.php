<?php
    session_start();
    include_once("../conexao.php");

    $id_tarefa = $_POST['id-tarefa'];
    $titulo = $_POST['titulo'];
    $descricao = $_POST['descricao'];
    $data = $_POST['data'];

    $sql = "UPDATE tarefas SET titulo = '$titulo', descricao = '$descricao', data = '$data' WHERE id_tarefa = '$id_tarefa'";
    $result = mysqli_query($conexao, $sql);

    header('Location: ../../frontend/pages/usuario-logado/minhas-tarefas.php');
    exit();
?>