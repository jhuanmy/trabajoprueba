<?php

class conectar
{
    public $host;
    public $usuario;
    public $password;
    public $basedatos;
    public $con;

    public function _construct()
    {
        $this->host = "localhost";
        $this->usuario = "root";
        $this->password = "";
        $this->basedatos = "trabajo";
        $this->con = new mysqli($this->host, $this->usuario, $this->password, $this->basedatos);
        if ($this->con->connect_errno)
        {
            echo "fallo de conexion";
        }

        else{
            echo "conexion exitosa";
        }
    }



}



$COONECT = new conectar();
