<!DOCTYPE html>
<html>
<head>
</head>
<body>
    <div class="container">
    <form method="post" enctype="multipart/form-data">
        <?php

        foreach ($getUser as $get){
            echo "<div class='card bg-success' id='imgBanner' style='border-radius: 0 0 10px 10px;height: 250px;background-image: url(banner_profile/".$get['banner_profile'].");background-repeat: no-repeat;background-size: cover;margin-top: 80px'>";
            echo "<div class='card-body'>";
            ?>
            <?php

                if($_GET['user'] == "joselitoxd"){
                    ?>
                    <button class='btn btn-success' type="button" onclick='document.getElementById("banner").click();'><i class='fas fa-edit'></i></button>
                    <a href="perfil.php" class="btn btn-danger float-right text-light" style="display: none; margin-left: 5px" id="botonCancelar" name="cancelar">Cancelar</a>
                    <input type="submit" value="Aceptar Cambios" class="btn btn-success float-right" style="display: none;" id="botonAceptar" name="aceptar">
                <?php
                }
                ?>
            
            <?php
            echo "</div>";
            echo "</div>";
            echo "<div class='card bg-success' id='imgPerfil' style='border-radius: 90px; width: 150px; height: 150px;position: relative;top: -80px; margin: 0 auto;background-image: url(profile_images/".$get['img_profile'].");background-repeat: no-repeat;background-size: cover; overflow: hidden'>";
            echo "<div class='card-body'>";
            ?>
            <?php

                if($_GET['user'] == "joselitoxd"){
                    ?>
                    <button class='btn btn-success' type="button" onclick='document.getElementById("profile").click();' style='position: relative; top: 90px; width: 170px;left:-27px;background-color: rgba(92,184,92,.8);'><i class='fas fa-edit'></i></button>
                    <?php
                }

            ?>
            
            <?php
            echo "</div>";
            echo "</div>";

            echo "<h3 style='text-align: center;position: relative;top: -80px'>".$get['user']."</h3>";
            echo "<h5 style='text-align: center;position: relative;top: -80px'>".$get['email']."</h5>";
        }
    ?>
     <input type='file' name='imageProfile' id='profile' style='display: none;' accept='image/jpeg, image/gif, image/png' onchange='PreviewImagePerfil()';>
      <input type='file' name='imageBanner' id='banner' style='display: none;' accept='image/jpeg, image/gif, image/png' onchange='PreviewImageBanner()';>
    </form>
    
    <hr style="margin-top: -60px">
    <section class="gallery-block cards-gallery">
        <div class="container">
            <div class="heading">
                <?php

                    if($_GET['user'] == "joselitoxd"){

                        echo "<h2>Mis QuickPosts</h2>";
                    }else{
                        echo "<h2>QuickPosts</h2>";
                    }

                ?>
            </div>
            <div class='row'>
    <?php

        if($getPost == null){
            if($_GET['user'] == "joselitoxd"){

                        echo "<h2 style='margin-left: 15px'>Todavia no tienes QuickPosts, Publica!</h2>";
                    }else{
                        echo "<h2 style='margin-left: 15px'>Todavia no ha publicado un QuickPost</h2>";
                    }
            
        }else{
            foreach ($getPost as $get) {
                
                if($get['image'] == null){
                    echo "<div class='col-md-6 col-lg-4'>";
                    echo "<div class='card border-0 transform-on-hover'>";
                        echo "<div class='card-body'>";
                            echo "<p class='text-muted card-text'>".$get['image_text']."</p>";
                            echo "<p class='card-text'><small class='text-muted'>".$get['dateP']."</small></p>";
                        echo "</div>";
                    echo "</div>";
                echo "</div>";
                }else{
                    echo "<div class='col-md-6 col-lg-4'>";
                    echo "<div class='card border-0 transform-on-hover'>";
                        echo "<a class='lightbox' href='images/".$get['image']."'>";
                            echo "<img src='images/".$get['image']."' alt='Card Image' class='card-img-top'>";
                        echo "</a>";
                        echo "<div class='card-body'>";
                            echo "<p class='text-muted card-text'>".$get['image_text']."</p>";
                            echo "<p class='card-text'><small class='text-muted'>".$get['dateP']."</small></p>";
                        echo "</div>";
                    echo "</div>";
                echo "</div>";
                }
            }
        }

    ?>  
        </div>
        </div>
    </section>
    </div>
</body>
</html>
