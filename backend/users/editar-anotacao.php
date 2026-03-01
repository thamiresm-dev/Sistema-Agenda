<?php
    session_start();
    include_once("../conexao.php");

    $id_anotacao = $_POST['id-anotacao'];
    $titulo = $_POST['titulo'];
    $conteudo = $_POST['conteudo'];

    $sql = "UPDATE anotacoes SET titulo = '$titulo', conteudo = '$conteudo' WHERE id_anotacao = '$id_anotacao'";
    $result = mysqli_query($conexao, $sql);

    header('Location: ../../frontend/pages/usuario-logado/anotacoes.php');
    exit();
?>