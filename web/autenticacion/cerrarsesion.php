<?php
session_start();
/*session is started if you don't write this line can't use $_Session  global variable*/
unset($_SESSION["usuarioActual"]);
unset($_SESSION['idusuario']);
header("location:/web/home.php");