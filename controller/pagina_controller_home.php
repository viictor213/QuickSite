<?php

    //f ($_SESSION["autenticado"] !== null){

        require_once ("model/pagina_model.php");

        $resultHome = new pagina_model();

        if (isset($_POST['upload'])){

            $image = $_FILES['image']['name'];
            $image_text = trim($_POST['image_text']);

            $dateP = date("d/m/Y | H:i");

            $target = "images/" . basename($image);

            $user = "joselitoxd";

            $subnautic = $resultHome->UserProfile($user);

            foreach ($subnautic as $get) {

                $imgUser = $get['img_profile'];
            }

            $subnauticSet = $resultHome->SetUserPost($image, $image_text, $user, $imgUser, $dateP);

            move_uploaded_file($_FILES['image']['tmp_name'], $target);

            header("refresh: 0");

        }

        if(isset($_POST['search'])){

            $searchText = $_POST['searchText'];

            header("location: search.php?user=".$searchText."");
        }

        $getPost = $resultHome->GetUserPost();

        require_once("view/pagina_view_home.php");
    //}else{

        //header("location: index.php");
    //}
