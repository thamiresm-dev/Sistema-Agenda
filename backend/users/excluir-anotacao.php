<?php
    require_once("../auth.php");

    $id_anotacao = $_GET['id_anotacao'];
    $id_usuario = $_SESSION['id'];

    $sqlDelete = $conexao->prepare("DELETE FROM anotacoes WHERE id_anotacao = ? AND id_usuario = ?");
    $sqlDelete->bind_param("ii", $id_anotacao, $id_usuario);
    $sqlDelete->execute();
    $sqlDelete->close();
    
    header("Location: ".URL_BASE."frontend/pages/usuario-logado/anotacoes.php");
    exit();
?>