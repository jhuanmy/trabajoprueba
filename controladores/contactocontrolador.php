<?php
include '../config/conexion.php';

if (!isset($_POST['submit'])){

    $nombre=$_POST['ingresonombre'];
    $correo=$_POST['ingresocorreo'];
    $mensaje=$_POST['ingresomensaje'];

      mysqli_query($con,"INSERT INTO contacto (nombre,correo,contenido) VALUE ('$nombre','$correo','$mensaje')");
echo "mensaje enviado";
// mail("juan13miguel@gmail.com","prueba","Este es el cuerpo del mensaje");
header("refresh:1;url=../web/contacto.php");

}
