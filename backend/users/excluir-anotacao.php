<?php
    session_start();
    include_once("../conexao.php");

    $id_anotacao = $_GET['id_anotacao'];
    $sql = "DELETE FROM anotacoes WHERE id_anotacao = $id_anotacao";
    $result = mysqli_query($conexao, $sql);
    
    header("Location: ../../frontend/pages/usuario-logado/anotacoes.php");
    exit();
?>