<?php
    session_start();
    include_once("../conexao.php");

    $descricao = $_POST['descricao'];
    $id_usuario = $_SESSION['id'];

    $sql = "INSERT INTO lista (descricao, id_usuario) VALUES ('$descricao', '$id_usuario')";
    $result = mysqli_query($conexao, $sql);

    header('Location: ../../frontend/pages/usuario-logado/lista-afazeres.php');
    exit();
?>