<?php
	//conectamos Con el servidor

function  conn(){
	$hostname = "localhost";
	$usuariodb = "root";
	$passworddb = "";
	$dbname = "final";

    //Generando conexion a la BD
		$conectar=@mysqli_connect($hostname, $usuariodb, $passworddb, $dbname);
	  return $conectar;
}

?>
