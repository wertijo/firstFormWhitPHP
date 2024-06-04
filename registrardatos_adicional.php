<?php
include_once('conectar_empleado.php');
//Recibo todos los datos del formulario
$id_empleado=$_POST['id_empleado'];
$foto_perfil=$_POST['foto_perfil'];
$color_fav=$_POST['color_fav'];
$edad=$_POST['edad'];
$nivel_ingles=$_POST['nivel_ingles'];
$link_empresa=$_POST['link_empresa'];
$contraseña=$_POST['contraseña'];
$confirmar=$_POST['confirmar'];
echo "Los datos son los siguientes: <br>";
echo "$id_empleado,$foto_perfil,$color_fav,$edad,$nivel_ingles,$link_empresa,$contraseña,$confirmar";
$conectar=conn();
$sql="INSERT INTO datos_adicionales (id_empleado,foto_perfil,color_fav,edad,nivel_ingles,link_empresa,contraseña,confirmar) VALUES('$id_empleado','$foto_perfil','$color_fav','$edad','$nivel_ingles','$link_empresa','$contraseña','$confirmar')";
//ejecutamos la sentencia de sql
$resul=mysqli_query($conectar,$sql) or trigger_error("Query Failed ! SQL - Error:".mysqli_error($conectar));
echo $sql;

header("Location: MasRegistros.html");
exit();
?>
