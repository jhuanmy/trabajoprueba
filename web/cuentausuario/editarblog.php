<?php
include "../../config/conexion.php";
include "../../web/head.php";
include "../menu/menu.php";

$idpost=$_GET['id_post'];
   $post=mysqli_query($con,"SELECT * FROM post where id_post='$idpost'");


foreach ($post as $items){

    }
?>

<div class="container">
    <form method="post" action="../../controladores/editarpostControlador.php">
        <div class="form-group">
            <input type="hidden" name="idpost" value="<?php echo $items['id_post']?>">
            <label for="exampleInputtitulo">Titulo</label>
            <input type="text" class="form-control" id="exampleInputtitulo" name="ingresotitulo" aria-describedby="titulo" value="<?php echo $items['titulo']?>" placeholder="titulo">
            <small id="emailHelp" class="form-text text-muted">Ingrese el titulo de tu post.</small>
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Contenido</label>
            <textarea class="form-control" name="ingresocontenido" id="exampleFormControlTextarea1"  rows="3"><?php echo $items['contenido']?></textarea>
        </div>
        <br>
        <button type="submit" class="btn btn-primary">Actualizar</button>
    </form>
</div>