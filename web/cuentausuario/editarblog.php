<?php
include "../../web/head.php";
include "../menu/menu.php";
?>

<div class="container">
    <form>
        <div class="form-group">
            <label for="exampleInputtitulo">Titulo</label>
            <input type="email" class="form-control" id="exampleInputtitulo" aria-describedby="titulo" placeholder="titulo">
            <small id="emailHelp" class="form-text text-muted">Ingrese el titulo de tu post.</small>
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Contenido</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
        <br>
        <button type="submit" class="btn btn-primary">Crear</button>
    </form>
</div>