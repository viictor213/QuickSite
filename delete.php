<?php
  
  session_start();
	require_once("model/pagina_model.php");

    $result = new pagina_model();

     $id = $_GET['id'];

    $getUserPost = $result->GetUserPostByUs($id);

    foreach ($getUserPost as $get) {
       		
       	$userPost = $get['userPost'];

       }   

    if($userPost == $_SESSION['autenticado']){
    	    $deletePost = $result->DeleteUserPost($id);
    	    header("location: ".$_SERVER['HTTP_REFERER']);


    }else{
    	 header("location: home.php");

    }


?>