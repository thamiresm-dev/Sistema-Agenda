<?php
    require_once("../auth.php");

    $id = $_SESSION['id'];

    $sqlDelete = $conexao->prepare("DELETE FROM usuarios WHERE id = ?");
    $sqlDelete->bind_param("i", $id);
    $sqlDelete->execute();
    $sqlDelete->close();

    session_destroy();
    header("Location: ".URL_BASE."frontend/pages/inicio.html");
    exit();
?>