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
    $usuario = $_POST['ingresonombre'];
    $correoActual = $_POST['ingresocorreo'];

//    $con = mysqli_connect($host, $user, $pw)
//    or die("Problemas al conectar al servidor");

//    mysqli_select_db($con, $db)
//    or die("problemas al conectar con db");


    mysqli_query($con, "INSERT INTO usuarios (usuario,nombre,correo,password)
 VALUE('" . $_POST['ingresarusuario'] . "','" . $_POST['ingresonombre'] . "','" . $_POST['ingresocorreo'] . "','" . $_POST['ingresocontrasena'] . "')");

$id_usuario=mysqli_query($con,"SELECT id_usuario FROM `usuarios` WHERE correo='$correoActual'");

foreach ($id_usuario as $id){
     $id['id_usuario'];

}
//  echo "id del usuario: $id_usuario  --------";


    $_SESSION['usuarioActual'] = $usuario;
    $_SESSION['idusuario'] =$id['id_usuario'];
    echo $_SESSION['usuarioActual']. "<br>";
    echo "sesion ".$_SESSION['idusuario']. "<br>";


    echo "Datos insertados<br>";
    header("refresh:1;url=../web/home.php");
//    header("location: ../web/home.php");

} else {
    echo "datos incompletos";
}


