<?php
    require_once("../auth.php");

    $id_item = $_POST['id-item'];
    $id_usuario = $_SESSION['id'];

    $concluido = isset($_POST['concluido']) ? 1 : 0;

    $sqlUpdate = $conexao->prepare("UPDATE lista SET concluido = ? WHERE id_item = ? AND id_usuario = ?");
    $sqlUpdate->bind_param("iii", $concluido, $id_item, $id_usuario);
    $sqlUpdate->execute();
    $sqlUpdate->close();
    
    header("Location: ".URL_BASE."frontend/pages/usuario-logado/lista-afazeres.php");

    exit();
?>