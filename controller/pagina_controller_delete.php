<?php
    require_once("model/pagina_model.php");

    $result = new pagina_model();   

    $id = $_GET['id'];

    $deletePost = $result->DeleteUserPost($id);

    header("location: ".$_SERVER['HTTP_REFERER']);
?>
