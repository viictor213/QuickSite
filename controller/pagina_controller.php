<?php

error_reporting(1);

session_start();

if ($_SESSION["autenticado"] !== null){

    header("location: home.php");
}else{

    require_once("model/pagina_model.php");

    $result = new pagina_model();

    if(isset($_POST['login'])){


        $userP = $_POST['user'];
        $passwdP = $_POST['passwd'];

        $subnautic = $result->LoginUser($userP, $passwdP);

        $user = null;
        $passwd = null;

        foreach ($subnautic as $get) {

            $user = $get['user'];
            $passwd = $get['password'];
        }

        if($userP != $user || $passwdP != $passwd){
            echo "<script>alert('usuario o contraseña invalidos');
                window.location = 'controller/confirm.php'</script>";
        }
        else{
            session_start();
            $_SESSION["autenticado"] = $user;
            header("location: home.php");
        }

    }

    if(isset($_POST['reg'])){

        $image = $_FILES['imgReg']['name'];

        if ($image == null){

            $image = "default-profile-picture-5.jpg";
        }

        $target = "profile_images/" . basename($image);

        $userReg = $_POST['userReg'];
        $passwdReg = $_POST['passwdReg'];
        $emailReg = $_POST['emailReg'];

        $subnautic = $result->GetUserReg($userReg);

        foreach ($subnautic as $get) {

            $user = $get['user'];
            $email = $get['email'];
        }

        if($userReg == $user){
            echo "<script>alert('El nombre de usuario ya existe')</script>";
        }else{
            $subnautic = $result->RegisterUser($userReg, $passwdReg, $emailReg, $image);
            move_uploaded_file($_FILES['imgReg']['tmp_name'], $target);
            session_start();
            $_SESSION["autenticado"]= $userReg;
            echo $_SESSION['autenticado'];
            echo "<script> alert('Te has registrado correctamente');
           window.location = 'controller/confirm.php'</script>";
        }
    }

    if(isset($_POST['search'])){

        $searchText = $_POST['searchText'];

        header("location: search.php?user=".$searchText."");
    }

    require_once("view/pagina_view.php");

}
