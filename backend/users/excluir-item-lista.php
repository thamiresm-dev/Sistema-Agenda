<?php
    require_once("../auth.php");

    $id_item = $_GET['id_item'];
    $id_usuario = $_SESSION['id'];

    $sqlDelete = $conexao->prepare("DELETE FROM lista WHERE id_item = ? AND id_usuario = ?");
    $sqlDelete->bind_param("ii", $id_item, $id_usuario);
    $sqlDelete->execute();
    $sqlDelete->close();
    
    header("Location: ".URL_BASE."frontend/pages/usuario-logado/lista-afazeres.php");
    exit();
?>