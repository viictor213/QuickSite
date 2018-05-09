<?php

    if ($_SESSION["autenticado"] !== null){

        require_once ("model/pagina_model.php");
        $resultHome = new pagina_model();

        if (isset($_POST['upload'])){

            $image = $_FILES['image']['name'];
            $image_text = trim($_POST['image_text']);

            $dateP = date("d-m-Y | H:i");

            $target = "images/" . basename($image);

            $user = $_SESSION['autenticado'];

            $subnautic = $resultHome->UserProfile($user);

            foreach ($subnautic as $get) {

                $imgUser = $get['img_profile'];
            }

            $subnauticSet = $resultHome->SetUserPost($image, $image_text, $user, $imgUser, $dateP);

            move_uploaded_file($_FILES['image']['tmp_name'], $target);

            header("location: controller/confirm.php");

        }

        $subnauticGet = $resultHome->GetUserPost();

        require_once("view/pagina_view_home.php");
    }else{

        header("location: index.php");
    }
