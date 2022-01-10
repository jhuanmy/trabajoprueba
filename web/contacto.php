<?php
include "../web/head.php";
include "../web/menu/menu.php";
?>
<div class="container w-50">
    <div class="card card-info">
        <div class="card-header">
            <h3 class="card-title">Enviar Mensaje</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form class="form-horizontal">
            <div class="card-body">
                <div class="form-group row">
                    <label for="inputnombre" class="col-sm-2 col-form-label">Nombre</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputnombre" placeholder="Nombre">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control" id="inputEmail" placeholder="Email">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputmensaje" class="col-sm-2 col-form-label">Mensaje</label>

                    <textarea class="form-control" id="inputmensaje" rows="3" placeholder="Escribe tu Mensaje" style="margin-top: 0px; margin-bottom: 0px; height: 201px;"></textarea>
                </div>

            </div>
            <!-- /.card-body -->
            <div class="card-footer">
                <button type="submit" class="btn btn-info">Enviar</button>

            </div>
            <!-- /.card-footer -->
        </form>
    </div>
</div>