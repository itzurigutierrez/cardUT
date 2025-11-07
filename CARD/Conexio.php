<?php
    //Comentarios

    $Servidor = "localhost";
    $Usuario = "root";
    $Password = "";
    $BD = "BASEEE";

    $Connexion = mysqli_connect($Servidor, $Usuario, $Password, $BD);
    if(!$Connexion){
        die("Error de conexion " . mysqli_connect_error());
    }
    mysqli_close($Connexion);
?>