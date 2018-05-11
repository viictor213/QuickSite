<!DOCTYPE html>
<html>
<head>
</head>
<body>
<div class="testbox">
    <h1>REGISTRATE</h1>
    <form method="post" enctype="multipart/form-data">
        <hr>
        <img src="resources/default-profile-picture-5.jpg" id="uploadPreview"/>
        <input type="text" name="userReg" id="name" placeholder="Usuario" maxlength="13" required onChange="while(''+this.value.charAt(0) ===' ')this.value=this.value.substring(1,this.value.length)"/>
        <input type="password" name="passwdReg" id="name" placeholder="Contrase&ntilde;a" minlength="8" required onChange="while(''+this.value.charAt(0) ===' ')this.value=this.value.substring(1,this.value.length)"/>
        <input type="email" name="emailReg" id="name" placeholder="Email" maxlength="30" required onChange="while(''+this.value.charAt(0) ===' ')this.value=this.value.substring(1,this.value.length)"/>
        <input type="file" name="imgReg" id="file" style="display: none" accept="image/jpeg, image/gif, image/png" onchange="PreviewImageReg()";/>
        <input type="button" class="button" value="Imagen Perfil" style="padding-left: 10px" onclick="document.getElementById('file').click();">
        <input type="submit" class="button" value="Registrarse" name="reg" >
    </form>
</div>
<img src="resources/Octocat.png" id="octocat">
<footer class="footer">
    <p id="year">GitWeb 2017, 2018</p>
    <p id="contact">Contact information: <a href="mailto:ericsoo78955@gmai.com">
            ericsoo78955@gmail.com</a></p>
</footer>
</body>
</html>