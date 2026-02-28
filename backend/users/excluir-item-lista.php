<?php
    session_start();
    include_once("../conexao.php");

    $id_item = $_GET['id_item'];
    $sql = "DELETE FROM lista WHERE id_item = $id_item";
    $result = mysqli_query($conexao, $sql);
    
    header("Location: ../../frontend/pages/usuario-logado/lista-afazeres.php");
    exit();
?>