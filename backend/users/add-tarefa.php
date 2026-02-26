<?php
    session_start();
    include_once("../conexao.php");

    $titulo = $_POST['titulo'];
    $descricao = $_POST['descricao'];
    $data = $_POST['data'];
    $id_usuario = $_SESSION['id'];

    $sql = "INSERT INTO tarefas (titulo, descricao, data, id_usuario) VALUES ('$titulo', '$descricao', '$data', '$id_usuario')";
    $result = mysqli_query($conexao, $sql);

    header('Location: ../../frontend/pages/usuario-logado/minhas-tarefas.php');
    exit();
?>