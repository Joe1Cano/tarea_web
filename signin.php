<?php
require "model/usuario.php";
session_start();
if($_POST){
    if(isset($_POST)){
        if(isset($_POST["email"]) && isset($_POST["password"])){
            $usuarios = (isset($_SESSION["usuarios"]) ? $_SESSION["usuarios"]:[]);
            $valido=false;
            for ($i=0; $i < count($usuarios); $i++) { 
                $usuario = $usuarios[$i];
                if($usuario->correo == $_POST["email"] && $usuario->password == $_POST["password"]){
                    $valido = true;
                    break;
                }
            }
            if($valido){
                header("location:main.php");
            } else {
                echo "El correo y/o password son incorrectos";
                header("Refresh:5; url=index.php");
            }
        }else{
            echo "Es mecesario el correo y password";
            header("Refresh:5; url=index.php");
        }
    } else{

    }
}
?>