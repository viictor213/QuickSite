<!DOCTYPE html>
<html>
<head>
</head>
<body>
<form method="POST" enctype="multipart/form-data">
	<input type="hidden" name="size" value="1000000">
    <div class="input-group" style="margin-top: 5px;">
      <input type="text" class="form-control" id="image_text" placeholder="Describe tu QuickPost..." style="margin-left: 5px" required>
      <span class="input-group-btn">
      <button class="btn btn-default" type="submit" name="upload" style="margin-left: 5px"><i class="fas fa-paper-plane"></i></button>
      <input type="file" name="image" id="file" style="display: none;" accept="image/jpeg, image/gif, image/png" onchange="PreviewImage()";>
      <button class="btn btn-default" type="button" style="margin-right: 5px" onclick="document.getElementById('file').click();"><i class="fas fa-camera"></i></button>
  	</span>
  </div>
</form>
<img src="" id="imgPost" style="float: right;width: 100%; max-width: 100px; border-radius: 5px; margin: 5px 5px 0 5px">
<section class="gallery-block cards-gallery">
<?php

	foreach ($getPost as $get) {

		if($get['image'] == null){
	echo "<div class='well' style='margin-top: 20px; margin-left: 10px'>";
      echo "<div class='media'>";
      	echo "<a class='pull-left' href='perfil.php?user=".$get['userPost']."'>";
    		echo "<img src='profile_images/".$get['imgUser']."' style='border-radius: 50px; width: 80px;height: 80px;border: 2px solid; border-color: #28A745';>";
  		echo "</a>";
  		echo "<div class='media-body' style='margin-left: 5px'>";
    		echo "<a class='text-dark' style='text-decoration: none' href='perfil.php?user=".$get['userPost']."'><h4 class='media-heading'>".$get['userPost']."</h4></a>";
          echo "<p style='width: 40%''>".$get['image_text']."</p>";
            echo "<p class='card-text'><small class='text-muted'>".$get['dateP']."</small></p>";
		echo "<hr>";
       echo "</div>";
    echo "</div>";
   echo "</div>";
		}else{

	echo "<div class='well' style='margin-top: 20px; margin-left: 10px'>";
      echo "<div class='media'>";
      	echo "<a class='pull-left' href='perfil.php?user=".$get['userPost']."'>";
    		echo "<img src='profile_images/".$get['imgUser']."' style='border-radius: 50px; width: 80px;height: 80px;border: 2px solid; border-color: #28A745';>";
  		echo "</a>";
  		echo "<div class='media-body' style='margin-left: 5px'>";
    		echo "<a class='text-dark' style='text-decoration: none' href='perfil.php?user=".$get['userPost']."'><h4 class='media-heading'>".$get['userPost']."</h4></a>";
        echo "<a class='lightbox' href='images/".$get['image']."'>";
            echo "<img src='images/".$get['image']."' style='width: 100%; max-width: 450px;border-radius: 5px'>";
        echo "</a>";
          echo "<p style='width: 40%''>".$get['image_text']."</p>";
            echo "<p class='card-text'><small class='text-muted'>".$get['dateP']."</small></p>";
		echo "<hr>";
       echo "</div>";
    echo "</div>";
   echo "</div>";
		}

	

	}

?>
</section>
</body>
</html>
