<?php
include '../../web/head.php';
include '../../web/menu/menu.php'
?>

<body class="text-center">
<div class="container col-4">
<main class="form-signin text-center">
    <form >
        <img class="mb-3" src="../../assets/img/iniciar.png" alt="" width="72" height="57">
        <h1 class="h3 mb-3 fw-normal"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Iniciar Sesion</font></font></h1>

        <div class="form-floating w-10">
            <input type="email" class="form-control" id="floatingInput" placeholder="nombre@ejemplo.com">
            <label for="floatingInput"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Dirección
                        de correo electrónico</font></font></label>
        </div>
        <div class="form-floating ">
            <input type="password" class="form-control" id="floatingPassword" placeholder="Contraseña">
            <label for="floatingPassword"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Contraseña</font></font></label>
        </div>

<hr>
        <button class="w-75 btn btn-lg btn-primary " type="submit"><font style="vertical-align: inherit;"><font
                        style="vertical-align: inherit;">iniciar sesion</font></font></button>
        <p class="mt-5 mb-3 text-muted"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">©
                    2017–2022</font></font></p>
    </form>
</main>
<div id="goog-gt-tt" class="skiptranslate" dir="ltr">
    <div style="padding: 8px;">

    </div>

    <div class="bottom" style="padding: 8px;">

        <div class="started-activity-container">
            <hr style="color: #CCC; background-color: #CCC; height: 1px; border: none;">
            <div class="activity-root"></div>
        </div>
    </div>
    <div class="status-message" style="display: none;"></div>
</div>


<div class="goog-te-spinner-pos">
    <div class="goog-te-spinner-animation">
        <svg xmlns="http://www.w3.org/2000/svg" class="goog-te-spinner" width="96px" height="96px" viewBox="0 0 66 66">
            <circle class="goog-te-spinner-path" fill="none" stroke-width="6" stroke-linecap="round" cx="33" cy="33"
                    r="30"></circle>
        </svg>
    </div>
</div>
</div>
</body>
