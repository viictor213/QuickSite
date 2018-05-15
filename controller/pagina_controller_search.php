<?php
session_start();
error_reporting(0);
if ($_SESSION['autenticado'] !== null){
  if($_GET['user'] != null){

    require_once("model/pagina_model.php");

    $result = new pagina_model();

    $searchText = $_GET['user'];

    $search = $result->Search($searchText);

    if(isset($_POST['search'])){

        $searchText = $_POST['searchText'];

        header("location: search.php?user=".$searchText."");
    }

    require_once ("view/pagina_view_search.php");

  }else{

    header("location: home.php");

  }

    

}else{

    header("location: index.php");
}
?>