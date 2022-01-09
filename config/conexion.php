<?php

$config = include 'config.php';
$conexion = new PDO('mysql:host=' . $config['db']['host'], $config['db']['user'], $config['db']['pass'], $config['db']['options']);