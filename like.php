<?php

	session_start();

	require_once('model/pagina_model.php');

	$result = new pagina_model();

	$getUser = $result->GetUserReg($_SESSION['autenticado']);

	foreach ($getUser as $get) {
		
		$id = $get['id'];
	}

	if(isset($_GET['type'], $_GET['id'])){

		$type = $_GET['type'];
		$idPost = $_GET['id'];
		$idUser = $id;


		switch ($type) {
			case 'post':
					$result->SetPostLike($idUser, $idPost);
					header('location: home.php');
				break;
		}

	}

?>