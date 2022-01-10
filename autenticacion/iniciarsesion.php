<?php
session_start();
include "../config/conexion.php";

$con = mysqli_connect($host, $user, $pw)
or die("Problemas al conectar al servidor");

mysqli_select_db($con, $db)
or die("problemas al conectar con db");

if (!empty($_POST["correosesion"]) && (!empty($_POST['contrasenasesion']))){

    $email=$_POST["correosesion"];
    $contrasena=$_POST["contrasenasesion"];




    $buscarpass=mysqli_query($con,"SELECT password,id_usuario,nombre FROM `usuarios` WHERE correo='$email'");


foreach ($buscarpass as $passwords){

   $passoriginal=$passwords['password'];
    $passwords['id_usuario'];
    $passwords['nombre'];
}

if ($passoriginal==$contrasena) {


    $_SESSION['usuarioActual'] = $passwords['nombre'];;
    $nombre=$_SESSION['usuarioActual'];
    $_SESSION['idusuario'] =$passwords['id_usuario'];

    echo "acceso autorizado";
    header("location: ../web/home.php");

}else{

    echo "error de contraseña";


    }












}else{
    echo "rellene los datos";
}