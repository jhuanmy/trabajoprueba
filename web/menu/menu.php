<header class="p-4 bg-black text-white fixed-top position-sticky">
    <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
            <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">


                <svg class="" width="32" height="32" role="img" aria-label="Bootstrap">
                    <img src="../../assets/img/blog.png" width="40" height="32">

                </svg>

            </a>

            <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                <li><a href="/web/blog/listablog.php" class="nav-link px-2 text-white">Home</a></li>
                <li><a href="#" class="nav-link px-2 text-white">Contacto</a></li>
                <li><a href="/web/cuentausuario/misblogs.php" class="nav-link px-2 text-white">Mi Cuenta</a></li>
            </ul>

            <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3">
                <input type="search" class="form-control form-control-dark" placeholder="Buscar..." aria-label="Search">
            </form>

            <div class="text-end">

                <button type="button" class="btn btn-outline-light me-2"
                        onclick="window.location.href='/web/autenticacion/iniciarsesion.php'">Iniciar Sesion
                </button>
                <button type="button" class="btn btn-warning"
                        onclick="window.location.href='/web/autenticacion/crearcuenta.php'">Crear Cuenta
                </button>
            </div>
        </div>
    </div>

</header>
<br>