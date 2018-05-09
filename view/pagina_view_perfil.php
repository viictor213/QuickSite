<!DOCTYPE html>
<html>
<head>
</head>
<body>
<form method="post" enctype="multipart/form-data">
    <div id='userBox'>
<?php

    foreach ($subnautic as $get){
        echo "<img src='profile_images/".$get['img_profile']."' id='imgPerfil'>";
        echo "<input type='file' name='image' id='file' style='display: none;' accept='image/jpeg, image/gif, image/png' onchange='PreviewImagePerfil()';>";
        echo "<p class='infoUser' id='user'>" .$get['user']."</p>";
        echo "<p class='infoUser'>" .$get['email']."</p>";
    }

?>
    <input type="submit" value="Aceptar Cambios" class="CambiarImage" style="display: none" id="botonAceptar" name="aceptar">
    <input type="button" value="Cambiar Imagen" class="CambiarImage" onclick="document.getElementById('file').click();">
    </div>
</form>
</body>
</html>
