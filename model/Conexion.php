<?php

class Conexion
{
    public function Conectar(){

        try{

            $con = new PDO('mysql:host=localhost; dbname=quicksite','root','');
            $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $con->exec("SET CHARACTER SET UTF8");

        }catch(Exception $e){
            die("ERROR: " . $e->getMessage());
            echo "LINE: " . $e->getLine();
        }

        return $con;

    }
}
