<?php
    session_start();
    include_once("../conexao.php");

    $id = $_SESSION['id'];
    $sql = "DELETE FROM usuarios WHERE id = '$id'";
    $result = mysqli_query($conexao, $sql);

    session_destroy();

    header('Location: ../../frontend/pages/inicio.html');

    exit();
?>