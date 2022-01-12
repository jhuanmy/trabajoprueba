<?php
session_start();
include '../config/conexion.php';
include "../clases/autenticacion.php";

$verificar=new autenticacion();
$verificar->verificarsesion("inicie sesion para realizar esta accion","");


if (!isset($_POST['submit']))
//if (isset($_POST['ingresonombre']) && !empty($_POST['ingresonombre']) &&
//    isset($_POST['ingresarusuario']) && !empty('ingresarusuario') &&
//    isset($_POST['ingresocorreo']) && !empty('ingresocorreo') &&
//    isset($_POST['ingresocontrasena']) && !empty('ingresocontrasena'))
//    isset($_POST['email']) && !empty('email') &&
//    $_POST['ingresocontrasena'] == $_POST['ingresocontrasena'])
{
    $titulo = $_POST['ingresotitulo'];
    $subtitulo=$_POST['ingresosubtitulo'];
    $contenido = $_POST['ingresocontenido'];
    $id_usuarioActual = $_SESSION['idusuario'];
    $fecha = date('m/d/Y h:i:s', time());

    $con = mysqli_connect($host, $user, $pw)
    or die("Problemas al conectar al servidor");

    mysqli_select_db($con, $db)
    or die("problemas al conectar con db");


//    var_dump($_FILES);
    $carpeta = "../documentos/";
    $ruta = "/documentos/";
    opendir($carpeta);

    $destino = $carpeta . mt_rand(50, 500) . $fecha = date("d-m-Y") . $_FILES['foto']['name'];

    $ruta = substr($destino, 2, 200);
//
    copy($_FILES['foto']['tmp_name'], $destino);
    echo "archivo subido exitosamente" . "<br>";
    mysqli_query($con, "INSERT INTO post (titulo,subtitulo,contenido,id_usuario,imagen)
 VALUE('" . $_POST['ingresotitulo'] . "','$subtitulo','" . $_POST['ingresocontenido'] . "','$id_usuarioActual','$ruta')");
//    $nombre=$_FILES['foto']['name'];
//    echo "<img src=\"documentos/$nombre\"><br>";
//
//    echo $_FILES['foto']['name']."<br>";
//    echo $_FILES['foto']['size']."bytes"."<br>";
//    echo $_FILES['foto']['type'];


    echo "Datos insertados<br>";
    header("refresh:1;url=../web/cuentausuario/misblogs.php");
//    header("location: ../web/home.php");

} else {
    echo "datos incompletos";
}