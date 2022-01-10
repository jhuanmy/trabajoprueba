<?php
$host="localhost";
$user="root";
$pw="";
$db="trabajo";
$con=mysqli_connect($host,$user,$pw)
or die("Problemas al conectar al servidor");

mysqli_select_db($con,$db)
or die("problemas al conectar con db");