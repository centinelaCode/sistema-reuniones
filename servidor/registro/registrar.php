<?php 
    include "../../clases/Auth.php";

    $usuario = $_POST['usuario'];
    // $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $password = $_POST['password'];

    $Auth = new Auth();

    if ($Auth->registrar($usuario, $password)) {
        header("location:../../index.php");
    } else {
        echo "No se pudo registrar";
    }

?>