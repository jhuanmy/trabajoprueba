<?php
include "../../web/head.php";
include "../menu/menu.php";
?>
<div class="container">
<div class="list-group">
    <div class="container">


<header>
    <button type="button" class="btn btn-secondary" onclick="window.location='crearblog.php'">Crear nuevo Post</button>

</header>
    </div>
    <br>
    <a href="verpost.php" class="list-group-item list-group-item-action d-flex gap-3 py-3" aria-current="true">
        <img src="https://github.com/twbs.png" alt="twbs" width="32" height="32" class="rounded-circle flex-shrink-0">
        <div class="d-flex gap-2 w-100 justify-content-between">
            <div>
                <h6 class="mb-0">titulo del post</h6>
                <p class="mb-0 opacity-75">Texto de post</p>
            </div>
            <div class="col-4 align-self-center">

            </div>
<!--            <div class="">-->
<!--                <div class="feature-icon bg-primary bg-gradient">-->
<!--                                        <svg class="bi" width="1em" height="1em">-->
<!--                                           <use xlink:href="#people-circle"></use>-->
<!--                                       </svg>-->
<!--                </div>-->
<!--                <small class="opacity-80 text-nowrap">fecha de creacion</small>-->
<!--                <small class="opacity-50 text-nowrap">Ahora</small>-->
<!--                <p>Juan Muñoz</p>-->
<!---->
<!--                <a href="#" class="icon-link">-->
<!--                    Ver Perfil-->
<!--                    <svg class="bi" width="1em" height="1em">-->
<!--                        <use xlink:href="#chevron-right"></use>-->
<!--                    </svg>-->
<!--                </a>-->
<!--            </div>-->

        </div>
    </a>

</div>
</div>