<?php
    session_start();
    include_once("conexao.php");

    define("URL_BASE", "/Sistema-Agenda/");

    if(!isset($_SESSION['id'])){
        header("Location: ".URL_BASE."frontend/pages/login.html");
        exit();
    }
?>