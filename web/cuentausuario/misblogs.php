<?php
include '../../config/conexion.php';
include "../../web/head.php";
include "../menu/menu.php";
include "../../config/conectar.php";
include "../../clases/autenticacion.php";

$verificar=new autenticacion();
$verificar->verificarsesion('<h4 class="text-center alert-danger">inicia sesion para realizar esto</h4>',"");



    



if (isset($_SESSION['idusuario'])){




    $id_usuarioActual = $_SESSION['idusuario'];
    $listablog = mysqli_query($con, "SELECT * FROM `post` join usuarios on post.id_usuario=usuarios.id_usuario where post.id_usuario='$id_usuarioActual' ORDER BY `post`.`id_post` DESC");




?>
<header class="align-content-center">
    <button type="button" class="btn btn-secondary" onclick="window.location='crearblog.php'">Crear
        nuevo
        Post
    </button>

</header>
<br>
<?php

foreach ($listablog as $items) {
    $idpost = $items['id_post'];
    $items['id_post'];


    echo "<div class='container'>
 <div class='container'>
<div class='list-group'>" ?>
    <a href='../blog/verpost.php?id_post=<?php echo $items['id_post']; ?>' <?php echo " class='list-group-item list-group-item-action d-flex gap-3 py-3' aria-current='true'>
        <img src='https://github.com/twbs.png' alt='twbs' width='32' height='32'
             class='rounded-circle flex-shrink-0'>
        <div class='d-flex gap-2 w-100 justify-content-between'>
            <div class='col-9'>
                <h6 class='mb-0'>" . $items['titulo'];
    echo "</h6>
                <p class='mb-0 opacity-75'>" . $items['contenido'];
    echo "</p>
            </div>
            <div class=''col-1 border-2'>
                <p class='pb-2 mb-0 small lh-sm'>
                    <strong class='d-block text-gray-dark'>Autor</strong>"; ?>
    <?php echo $items['nombre']; ?>'
    <?php
    echo "   </p>
            </div>
            <div class='col-1 border-2'>
                <p class='pb-2 mb-0 small lh-sm'>
                    <strong class='d-block text-gray-dark'>Fecha</strong>
                    " . $items['fecha_registro'];
    echo "
                </p>               
                        </div>";
    echo " <div class='text-center col-1'>
        <img class='profile-user-img img-fluid img-circle' src=" . $items['imagen'] . "
             alt='User profile picture'>
    </div>


        </div>
    </a>
    "; ?>

    <button type='button' class='btn btn-secondary'
            onclick="window.location.href='editarblog.php?id_post=<?php echo $items['id_post']; ?>'">Editar
    </button>
    </div>
    <br>

    </div>
    <?php
    echo "</div>";
}

}
?>
</div>
