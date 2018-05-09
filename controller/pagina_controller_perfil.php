  <?php

if ($_SESSION['autenticado'] !== null){

    require_once("model/pagina_model.php");

    $result = new pagina_model();

    $user = $_SESSION['autenticado'];

    $subnautic = $result->UserProfile($user);

    if (isset($_POST['aceptar'])){

        $user = $_SESSION['autenticado'];

        $subnauticGet = $result->UserProfile($user);

        $userUp = null;

        foreach ($subnauticGet as $get){

            $userUp = $get['user'];
        }

        $image = $_FILES['image']['name'];

        $target = "profile_images/" . basename($image);

        $subnauticUp = $result->UpdateUser($image, $userUp);

        move_uploaded_file($_FILES['image']['tmp_name'], $target);

        header("location: controller/confirm.php");
    }

    require_once ("view/pagina_view_perfil.php");

}else{

    header("location: index.php");
}
