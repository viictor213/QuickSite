<?php

class pagina_model
{

    private $db;
    private $user;
    private $post;

    public function __construct(){

        require_once("Conexion.php");

        $this->db = Conexion::Conectar();
        $this->user = [];
        $this->post = [];

    }

    public function LoginUser($userP, $passwP){

        $query = $this->db->query("SELECT * FROM users WHERE user = '".$userP."' AND password = '".$passwP."'");

        while($row = $query->fetch(PDO::FETCH_ASSOC)){

            $this->user[] = $row;
        }

        return $this->user;
    }

    public function UserProfile($user){

        $query = $this->db->query("SELECT * FROM users WHERE user = '".$user."'");

        while($row = $query->fetch(PDO::FETCH_ASSOC)){

            $this->user[] = $row;
        }

        return $this->user;
    }

    public function GetUserReg($userReg){

        $query = $this->db->query("SELECT * FROM users WHERE user = '".$userReg."'");

        while($row = $query->fetch(PDO::FETCH_ASSOC)){

            $this->user[] = $row;
        }

        return $this->user;
    }

    public function Search($search){

        $query = $this->db->query("SELECT * FROM users WHERE user LIKE '".$search."%'");

        while($row = $query->fetch(PDO::FETCH_ASSOC)){

            $this->user[] = $row;
        }

        return $this->user;
    }

    public function GetUserPost(){

        $query = $this->db->query("SELECT *,post.id, COUNT(post_likes.id) AS likes
            FROM post
            LEFT JOIN post_likes ON post.id = post_likes.post
            GROUP BY post.id ORDER BY post.id DESC");

        while($row = $query->fetch(PDO::FETCH_ASSOC)){

            $this->post[] = $row;
        }

        return $this->post;
    }

    public function GetUserPostByUs($id){

        $query = $this->db->query("SELECT userPost FROM post WHERE id = ".$id."");

        while($row = $query->fetch(PDO::FETCH_ASSOC)){

            $this->post[] = $row;
        }

        return $this->post;
    }


     public function GetUserPostProfile($user){

        $query = $this->db->query("SELECT * FROM post WHERE userPost = '".$user."' ORDER BY id DESC");

        while($row = $query->fetch(PDO::FETCH_ASSOC)){

            $this->post[] = $row;
        }

        return $this->post;
    }

    public function UpdateUser($newImage, $newBanner, $user){

        $this->db->query("UPDATE users SET img_profile= '".$newImage."' WHERE user = '".$user."'");
        $this->db->query("UPDATE users SET banner_profile= '".$newBanner."' WHERE user = '".$user."'");
        $this->db->query("UPDATE post SET imgUser= '".$newImage."' WHERE userPost = '".$user."'");

    }

    public function SetUserPost($image, $image_text, $userPost, $imgUser, $dateP){

        $query = "INSERT INTO post (image, image_text, userPost, imgUser, dateP) VALUES (:image, :image_text, :userPost, :imgUser, :dateP)";

        $stmt = $this->db->prepare($query);

        $stmt->bindparam(':image', $image);
        $stmt->bindparam(':image_text', $image_text);
        $stmt->bindparam(':userPost', $userPost);
        $stmt->bindparam(':imgUser', $imgUser);
        $stmt->bindparam(':dateP', $dateP);

        $stmt->execute();

    }

    public function SetPostLike($idUser, $idPost){

        $query = "INSERT INTO post_likes (user, post) SELECT :user, :post
        FROM post WHERE EXISTS(
            SELECT id
            FROM post
            WHERE id=".$idPost.")
            AND NOT EXISTS(
                SELECT id
                FROM post_likes
                WHERE user = ".$idUser."
                AND post = ".$idPost.") LIMIT 1";

        $stmt = $this->db->prepare($query);

        $stmt->bindparam(':user', $idUser);
        $stmt->bindparam(':post', $idPost);

        $stmt->execute();

    }

    public function DeleteUserPost($id){

        $query = "DELETE FROM post WHERE id = :id;
        DELETE FROM post_likes WHERE post = :id";

        $stmt = $this->db->prepare($query);

        $stmt->bindparam(':id', $id);

        $stmt->execute();

    }

    public function RegisterUser($fullname, $user, $passwd, $email, $birth, $img, $banner){

        $query = "INSERT INTO users (full_name, user, password, email, birth, img_profile, banner_profile) VALUES (:fullname, :user, :passwd, :email, :birth, :img, :banner)";

        $stmt = $this->db->prepare($query);

        $stmt->bindparam(':user', $user);
        $stmt->bindparam(':passwd', $passwd);
        $stmt->bindparam(':email', $email);
        $stmt->bindparam(':img', $img);
        $stmt->bindparam(':fullname', $fullname);
        $stmt->bindparam(':birth', $birth);
        $stmt->bindparam(':banner', $banner);

        $stmt->execute();

    }

}
