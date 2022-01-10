<?php

include '../config/conexion.php';

$idpost=$_POST['idpost'];
$titulo=$_POST['ingresotitulo'];
$contenido=$_POST['ingresocontenido'];



mysqli_query($con, "UPDATE `post` SET `titulo`='$titulo',`contenido`='$contenido' WHERE id_post='$idpost'");
echo "Post Actualizado" ;
header("refresh:1;url=../web/cuentausuario/misblogs.php");