<!DOCTYPE html>
<html>
<head>
</head>
<body>
<form method="POST" enctype="multipart/form-data">
	<input type="hidden" name="size" value="1000000">
    <div class="input-group" style="margin-top: 5px;">
      <input type="text" class="form-control" name="image_text" placeholder="Describe tu QuickPost..." style="margin-left: 5px" required onChange="while(''+this.value.charAt(0) ===' ')this.value=this.value.substring(1,this.value.length)">
      <span class="input-group-btn">
      <button class="btn btn-default" type="submit" name="upload" style="margin-left: 5px"><i class="fas fa-paper-plane"></i></button>
      <input type="file" name="image" id="file" style="display: none;" accept="image/jpeg, image/gif, image/png" onchange="PreviewImage()";>
      <button class="btn btn-default" type="button" style="margin-right: 5px" onclick="document.getElementById('file').click();"><i class="fas fa-camera"></i></button>
  	</span>
  </div>
</form>
<img src="" id="imgPost" class="img-responsive" style="float: right;width: 100%; max-width: 100px; border-radius: 5px; margin: 5px 5px 0;">
<section class="gallery-block cards-gallery">
<?php

  if($getPost != null){
    foreach ($getPost as $get) {

    if($get['image'] == null){

  echo "<div class='well' style='margin-top: 20px; margin-left: 10px'>";
      echo "<div class='media'>";
     
       echo "<p style='border-radius: 90px; width: 80px; height: 80px;background-image: url(profile_images/".$get['imgUser'].");background-repeat: no-repeat;background-size: cover;></p>";

        echo "<a class='pull-left'>";
      echo "</a>";

      echo "<div class='media-body' style='margin-left: 5px; margin-right: 5px'>";
      
        echo "<h4 class='media-heading'><a class='text-dark' style='text-decoration: none;' href='perfil.php?user=".$get['userPost']."'>".$get['userPost']."</a>";
        if($get['userPost'] == "joselitoxd"){
            echo "<button type='button' style='padding-left: 12px; margin-left: 5px;' class='btn' data-toggle='dropdown'>
        <i class='fas fa-ellipsis-h'></i>
        </button>
        <div class='dropdown-menu '>
            <a class='dropdown-item text-danger' href='delete.php?id=".$get['id']."'>Eliminar Post</a>
        </div>";
        }
        echo "</h4>";
         
          echo "<p>".$get['image_text']."</p>";
            echo "<p class='card-text'><small class='text-muted'>".$get['dateP']."</small></p>";
    echo "<hr>";
       echo "</div>";
    echo "</div>";
   echo "</div>";
    }else{

  echo "<div class='well' style='margin-top: 20px; margin-left: 10px; margin-right: 5px'>";
      echo "<div class='media'>";
      
      echo "<p style='border-radius: 90px; width: 80px; height: 80px;background-image: url(profile_images/".$get['imgUser'].");background-repeat: no-repeat;background-size: cover;></p>";
      echo "<a  class='pull-left'>";
      echo "</a>";
      echo "<div class='media-body' style='margin-left: 5px'>";
        echo "<h4 class='media-heading'><a class='text-dark' style='text-decoration: none;' href='perfil.php?user=".$get['userPost']."'>".$get['userPost']."</a>";
        if($get['userPost'] == "joselitoxd"){
            echo "<button type='button' style='padding-left: 12px; margin-left: 5px;' class='btn' data-toggle='dropdown'>
        <i class='fas fa-ellipsis-h'></i>
        </button>
        <div class='dropdown-menu '>
            <a class='dropdown-item text-danger' href='delete.php?id=".$get['id']."'>Eliminar Post</a>
        </div>";
        }
        echo "</h4>";
        echo "<a class='lightbox' href='images/".$get['image']."'>";
            echo "<img src='images/".$get['image']."' style='width: 100%; max-width: 450px;border-radius: 5px'>";
        echo "</a>";
          echo "<p>".$get['image_text']."</p>";
            echo "<p class='card-text'><small class='text-muted'>".$get['dateP']."</small></p>";
    echo "<hr>";
       echo "</div>";
    echo "</div>";
   echo "</div>";
    }
  
  }
  }else{

    echo "<h3 style='margin: 10px'>Todavia no se ha publicado un QuickPost, Se el primero!</h3>";

  }

?>
</section>
</body>
</html>
