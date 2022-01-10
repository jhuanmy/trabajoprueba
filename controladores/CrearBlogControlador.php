<?php
session_start();
include '../config/conexion.php';


if (!isset($_POST['submit']))
//if (isset($_POST['ingresonombre']) && !empty($_POST['ingresonombre']) &&
//    isset($_POST['ingresarusuario']) && !empty('ingresarusuario') &&
//    isset($_POST['ingresocorreo']) && !empty('ingresocorreo') &&
//    isset($_POST['ingresocontrasena']) && !empty('ingresocontrasena'))
//    isset($_POST['email']) && !empty('email') &&
//    $_POST['ingresocontrasena'] == $_POST['ingresocontrasena'])
{
    $titulo = $_POST['ingresotitulo'];
    $contenido = $_POST['ingresocontenido'];
    $id_usuarioActual = $_SESSION['idusuario'];
    $fecha = date('m/d/Y h:i:s', time());
    echo $titulo;
    echo $contenido;
    echo $id_usuarioActual;
    echo $fecha;
    $con = mysqli_connect($host, $user, $pw)
    or die("Problemas al conectar al servidor");

    mysqli_select_db($con, $db)
    or die("problemas al conectar con db");


    mysqli_query($con, "INSERT INTO post (titulo,contenido,id_usuario)
 VALUE('" . $_POST['ingresotitulo'] . "','" . $_POST['ingresocontenido'] . "',$id_usuarioActual)");

//    VALUE('" . $_POST['ingresotitulo'] . "','" . $_POST['ingresocontenido'] . "', $id_usuarioActual,$fecha)");

    echo "Datos insertados<br>";
    header("refresh:1;url=../web/cuentausuario/misblogs.php");
//    header("location: ../web/home.php");

} else {
    echo "datos incompletos";
}