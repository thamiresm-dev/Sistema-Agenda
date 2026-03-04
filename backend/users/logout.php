<?php
    require_once("../auth.php");

    session_destroy();

    header("Location: ".URL_BASE."frontend/pages/login.html");

    exit();
?>