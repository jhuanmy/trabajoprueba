<?php


class autenticacion
{
    public $host = "localhost";
    public $user = "root";
    public $pw = "";
    public $db = "trabajo";
    public $mensaje;
    public $datoshtml;
    public $buscarpass;

//    public $con;


    public function verificarUsuario($correo, $contrasena)
    {
        $this->con = mysqli_connect($this->host, $this->user, $this->pw)
        or die("Problemas al conectar al servidor");

        mysqli_select_db($this->con, $this->db)
        or die("problemas al conectar con db");


        $this->buscarpass = mysqli_query($this->con, "SELECT password,id_usuario,nombre FROM `usuarios` WHERE correo='$correo'");

        foreach ($this->buscarpass as $passwords) {

            $passoriginal = $passwords['password'];
            $passwords['id_usuario'];
            $passwords['nombre'];
        }


        if ($passoriginal == $contrasena) {


            $_SESSION['usuarioActual'] = $passwords['nombre'];;
            $nombre = $_SESSION['usuarioActual'];
            $_SESSION['idusuario'] = $passwords['id_usuario'];

            echo "acceso autorizado";
            header("location: ../web/home.php");

        } else {

            echo "error de contraseña";


        }

    }

    public function verificarsesion($mensaje, $html)
    {
        if (isset($_SESSION['usuarioActual'])) {
            $this->datoshtml = $html;
echo $this->datoshtml;
        } else {
            echo $mensaje;

            echo "<script language=\"javascript\">

setTimeout(function(){

console.log(window.location.href=\"/web/home.php\");
},1000);
;
</script>";


        }

    }


}


