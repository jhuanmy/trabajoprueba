<?php
//require_once "../../clases/autenticacion.php";
session_start();

?>
<header class="p-1 bg-black text-white fixed-top position-sticky">
    <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
            <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">


                <svg class="" width="32" height="32" role="img" aria-label="Bootstrap">
                    <img src="../../assets/img/blog.png" width="40" height="32">

                </svg>

            </a>

            <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                <li><a href="/web/blog/listablog.php" class="nav-link px-2 text-white">Inicio</a></li>
                <li><a href="/web/contacto.php" class="nav-link px-2 text-white">Contacto</a></li>
                <?php
                if (isset($_SESSION['usuarioActual'])) {
                    ?>

                    <li><a href="/web/cuentausuario/misblogs.php" class="nav-link px-2 text-white">Mis publicaciones</a></li>
                    <?php
                }
                ?>
            </ul>



            <div class="text-end">
                <?php



                if (isset($_SESSION['usuarioActual'])) {
//asignar a variable
                    $usernameSesion = $_SESSION['usuarioActual'];
                    $idusuario = $_SESSION['idusuario'];
//asegurar que no tenga "", <, > o &
                    $username = htmlspecialchars($usernameSesion);

//usarla donde quieras
                    echo "<p>¡Hola $username!  Cod:$idusuario</p><span><a href='/web/autenticacion/cerrarsesion.php'>Cerrar Sesion</a></span> ";


                } else {
//
                    ?>
                    <button type="button" class="btn btn-outline-light me-2"
                            onclick="window.location.href='/web/autenticacion/iniciarsesion.php'">Iniciar Sesion
                    </button>
                    <button type="button" class="btn btn-warning"
                            onclick="window.location.href='/web/autenticacion/crearcuenta.php'">Crear Cuenta
                    </button>

                    <?php
                }


                ?>

            </div>
        </div>
    </div>

</header>
<br>