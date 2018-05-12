<!DOCTYPE html>
<html>
<head>
    <title>QuickSite</title>
</head>
<body>
    <div class="container">
        <h5 class="section-title h1">QuickUsers</h5>
        <hr>
        <div class="row">
        <?php

        	foreach ($search as $get) {

        	$user = $get['user'];
        	echo "<div class='col-xs-12 col-sm-6 col-md-4' style='margin-bottom: 5px'>";
                echo "<div class='image-flip'>";
                   echo "<div class='mainflip'>";
                       echo "<div class='frontside'>";
                           echo "<div class='card'>";
                               echo "<div class='card-body text-center'>";
                                   echo "<a href='perfil.php?user=".$get['user']."' class='text-dark' style='text-decoration: none'><p style='border-radius: 90px; width: 150px; height: 150px;margin: 0 auto;background-image: url(profile_images/".$get['img_profile'].");background-repeat: no-repeat;background-size: cover;></p></a>";
                                    echo "<a href='perfil.php?user=".$get['user']."'><h4 class='card-title'>".$get['user']."</h4></a>";
                                    echo "<p class='card-text'>".$get['email']."</p>";
                               echo "</div>";
                           echo "</div>";
                       echo "</div>";
                   echo "</div>";
               echo "</div>";
           echo "</div>";
        	}

        	if ($user == null) {
        		
        		echo "<h2 style='margin-left: 15px'>No hay usuarios existentes</h2>";
        	}

        ?>
            
        </div>
    </div>
</body>
</html>
