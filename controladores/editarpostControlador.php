<?php

include '../config/conexion.php';

$idpost=$_POST['idpost'];
$titulo=$_POST['ingresotitulo'];
$contenido=$_POST['ingresocontenido'];






$carpeta = "../documentos/";
$ruta = "/documentos/";
opendir($carpeta);

$destino = $carpeta . mt_rand(50, 500) . $fecha = date("d-m-Y") . $_FILES['foto']['name'];
//echo "url imagen: ".$destino;
$ruta = substr($destino, 2, 200);

//
copy($_FILES['foto']['tmp_name'], $destino);


// buscamos el fichero

$rutaimagenantigua=mysqli_query($con,"SELECT  `imagen` FROM `post` WHERE id_post='$idpost'");
foreach ($rutaimagenantigua as $url)
{
    $rutaimagen=$url['imagen'];


}
//echo "ruta base".$rutaimagen;
if ($rutaimagen) {
    unlink('..' . $rutaimagen);
}else{


}








//mysqli_query($con, "UPDATE `post` SET `titulo`='$titulo',`contenido`='$contenido',imagen=$ruta WHERE id_post='$idpost'");
mysqli_query($con,"UPDATE `post` SET `titulo`='ggggg',`contenido`='coneeeee-3',`imagen`='$ruta' WHERE id_post='$idpost'");

echo "Post Actualizado" ;
header("refresh:1;url=../web/cuentausuario/misblogs.php");