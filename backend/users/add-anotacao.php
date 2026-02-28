<?php
    session_start();
    include_once("../conexao.php");

    $titulo = $_POST['titulo'];
    $conteudo = $_POST['conteudo'];
    $id_usuario = $_SESSION['id'];

    $sql = "INSERT INTO anotacoes (titulo, conteudo, id_usuario) VALUES ('$titulo', '$conteudo', '$id_usuario')";
    $result = mysqli_query($conexao, $sql);

    header('Location: ../../frontend/pages/usuario-logado/anotacoes.php');
    exit();
?>