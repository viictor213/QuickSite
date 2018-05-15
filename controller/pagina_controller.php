<?php

error_reporting(1);

session_start();

if ($_SESSION["autenticado"] != null){

    header("location: home.php");
}else{

    require_once("model/pagina_model.php");

    $result = new pagina_model();

    if(isset($_POST['login'])){


        $userP = strtolower($_POST['user']);
        $passwdP = $_POST['passwd'];

        $subnautic = $result->LoginUser($userP, $passwdP);

        $user = null;
        $passwd = null;

        foreach ($subnautic as $get) {

            $user = $get['user'];
            $passwd = $get['password'];
        }

        if($userP != $user || $passwdP != $passwd){
            echo "<script>alert('usuario o contraseña invalidos')</script>";
            
        }
        else{
            session_start();
            $_SESSION["autenticado"] = $userP;
            header("location: home.php");
        }

    }

    if(isset($_POST['reg'])){

        $image = "default-profile-picture-5.jpg";
        $banner = "default-banner.jpg";
        $userReg = $_POST['userReg'];
        $passwdReg = $_POST['passwdReg'];
        $emailReg = $_POST['emailReg'];
        $fullnameReg = $_POST['fullnameReg'];
        $birthReg = $_POST['birthReg'];

        $subnautic = $result->GetUserReg($userReg);

        foreach ($subnautic as $get) {

            $user = $get['user'];
        }

        if($userReg == $user){
            echo "<script>alert('El nombre de usuario ya existe')</script>";
        }else{
            $subnautic = $result->RegisterUser($fullnameReg, $userReg, $passwdReg, $emailReg, $birthReg, $image, $banner);
            session_start();
            $_SESSION["autenticado"]= $userReg;
            echo $_SESSION['autenticado'];
            echo "<script> alert('Te has registrado correctamente')</script>";
            header('refresh: 0');
        }
    }

    require_once("view/pagina_view.php");

}
