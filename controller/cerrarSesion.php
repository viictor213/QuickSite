<?php

    session_start();
    $_SESSION['autenticado'] = null;
    session_destroy();
    header("location: ../index.php");
?>