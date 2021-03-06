<?php
session_start();
error_reporting(0);
if ($_SESSION['autenticado'] !== null){
  if($_GET['user'] != null){

    require_once("model/pagina_model.php");

    $result = new pagina_model();   

    $user = $_GET['user'];

    $getUser = $result->UserProfile($user);

    $getPost = $result->GetUserPostProfile($user);


    if (isset($_POST['aceptar'])){

        $subnauticGet = $result->UserProfile($user);

        foreach ($subnauticGet as $get){

            $userUp = $get['user'];
            $imageBaNow = $get['banner_profile'];
            $imageProNow = $get['img_profile'];
        }

        $imageProfile = $_FILES['imageProfile']['name'];
        $imageBanner = $_FILES['imageBanner']['name'];

        if ($imageProfile == null) {
            $imageProfile = $imageProNow;
        }else if($imageBanner == null){
            $imageBanner = $imageBaNow;
        }

        $targetProfile = "profile_images/" . basename($imageProfile);
        $targetBanner = "banner_profile/" . basename($imageBanner);

        $subnauticUp = $result->UpdateUser($imageProfile, $imageBanner, $userUp);

        move_uploaded_file($_FILES['imageProfile']['tmp_name'], $targetProfile);
        move_uploaded_file($_FILES['imageBanner']['tmp_name'], $targetBanner);

        header("refresh:0");
    }

    if(isset($_POST['search'])){

        $searchText = $_POST['searchText'];

        header("location: search.php?user=".$searchText."");
    }

    require_once ("view/pagina_view_perfil.php");

  }else{

    header("location: perfil.php?user=".$_SESSION['autenticado']."");

  }

    

}else{

    header("location: index.php");
}
