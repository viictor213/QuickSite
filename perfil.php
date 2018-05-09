<!DOCTYPE html>
<html>
<head>
    <title>GitWeb</title>
    <link rel="stylesheet" type="text/css" href="style/perfil.css">
    <link rel="icon" type="image/png" href="resources/git.sh.png">
    <script src="scripts/home.js"></script>
</head>
<body>
<div id="userMenu">
    <h1>MENU</h1>
    <ul>
        <li id="gitplayButton"><a href="perfil.php"><button type="button" class="gitplayButtonDesign">MI PERFIL</button></a></li>
        <li id="cerrarSesion"><a href="controller/cerrarSesion.php"><button type="button" class="gitplayButtonDesign">CERRAR SESION</button></a></li>
    </ul>
</div>
<ul id="barra">
    <li><a href="home.php"><img src="resources/git.sh.png" id="logoImg"></a></li>
    <li id="titleWeb">GitWeb</li>
    <?php
    session_start();
    echo "<li id='userSesion'><button type='button' class='gitplayButtonDesign' onclick='PreviewUserMenu()';>" .$_SESSION['autenticado']."</button></li>";
    ?>
</ul>
<?php

require_once("controller/pagina_controller_perfil.php");

?>
</body>
</html>
