<?php

include "../../web/head.php";
include "../menu/menu.php";


include '../../config/conexion.php';


$con = mysqli_connect($host, $user, $pw)
or die("Problemas al conectar al servidor");

mysqli_select_db($con, $db)
or die("problemas al conectar con db");
//$id_usuarioActual = $_SESSION['idusuario'];

$listablog = mysqli_query($con, "SELECT * FROM `post` join usuarios on post.id_usuario=usuarios.id_usuario  ORDER BY `post`.`id_post` DESC");
?>


<main class="container">


    <div class="my-3 p-3 bg-body rounded shadow-sm">
        <h6 class="border-bottom pb-2 mb-0">blogs Actualizados</h6>

        <?php
        foreach ($listablog as $items) {
        echo " <div class='d-flex text-muted pt-3'>"; ?>
        <a href='verpost.php?id_post=<?php echo $items['id_post']; ?>'<?php echo " class='list-group-item list-group-item-action d-flex gap-3 py-3' aria-current='true'>
                <div class='col-8'>

                    <p class='pb-3 mb-0 small lh-sm'>
                 <strong class='d-block text-gray-dark''>" . $items['id_post'] . "</strong>
                        <strong class='d-block text-gray-dark''>" . $items['usuario'] . "</strong>
            <strong class='d-block text-gray-dark''>" . $items['titulo'] . "</strong>";

        echo $items['contenido'] . "</p>    </div>";

        echo "<div class='col-1'>
        <p class='pb-2 mb-0 small lh-sm'>
            <strong class='d-block text-gray-dark'>Fecha</strong>" . $items['fecha_registro'] . "</p>
    </div>";

        echo " <div class='col-1'>
        <p class='pb-2 mb-0 small lh-sm '>
            <strong class='d-block text-gray-dark'>Autor</strong>" . $items['nombre'] . "</p></div>";


        echo " <div class='text-center col-1'>
        <img class='profile-user-img img-fluid img-circle' src=" . $items['imagen'] . "
             alt='User profile picture'>
    </div></a>"; ?>


            <?php
            $usuariopost = $items['id_usuario'];
            if (isset($_SESSION['idusuario'])) {
            if ($usuariopost == $idusuario){
            echo "<button type='button' class='btn btn-secondary'" ?>
           onclick="window.location.href='../../web/cuentausuario/editarblog.php?id_post=<?php echo $items['id_post'] ?>'">Editar
            </button>
            <?php
            }

            }else{

            }
            ?>


    </div>
    <?php
    }
    ?>


    </div>
</main>