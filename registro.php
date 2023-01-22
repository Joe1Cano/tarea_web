<?php
require "model/usuario.php";
    session_start();
    if($_POST){
        if(isset($_POST["name"]) && isset($_POST["email"]) && isset($_POST["password"])){
            $usuario = new Usuario();
            $usuario-> nombre = $_POST["name"];
            $usuario->correo =$_POST["email"];
            $usuario->password = $_POST["password"];
            $_SESSION["usuarios"][]=$usuario;
            echo "tu registro fue exitoso";
            header("Refresh:5; url=index.php");
        } else {
            echo "Hay datos faltantes, intenta de nuevo";
        }
    }
?>