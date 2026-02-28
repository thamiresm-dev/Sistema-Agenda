<?php
    session_start();
    include_once("../conexao.php");

    $id_item = $_POST['id-item'];
    $id_usuario = $_SESSION['id'];

    $concluido = isset($_POST['concluido']) ? 1 : 0;

    $sql = "UPDATE lista SET concluido = $concluido WHERE id_item = $id_item AND id_usuario = $id_usuario";
    $result = mysqli_query($conexao, $sql);
    header('Location: ../../frontend/pages/usuario-logado/lista-afazeres.php');

    exit();
?>