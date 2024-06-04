<?php
include_once('conectar_empleado.php');
//Recibo todos los datos del formulario
$id_empleado=$_POST['id_empleado'];
$nombres=$_POST['nombres'];
$apellidos=$_POST['apellidos'];
$email=$_POST['email'];
$telefono=$_POST['telefono'];
$fecha_contratacion=$_POST['fecha_contratacion'];
$id_trabajo=$_POST['id_trabajo'];
$salario=$_POST['salario'];
$comision=$_POST['comision'];
$id_manager=$_POST['id_manager'];
$id_departamento=$_POST['id_departamento'];
$confirmar=$_POST['confirmar'];
echo "Los datos son los siguientes: <br>";
echo "$id_empleado,$nombres,$apellidos,$email,$telefono,$fecha_contratacion,$id_trabajo,$salario,$comision,$id_manager,$id_departamento,$confirmar";
$conectar=conn();
$sql="INSERT INTO datos_empleado (id_empleado,nombres,apellidos,email,telefono,fecha_contratacion,id_trabajo,salario,comision,id_manager,id_departamento,confirmar) VALUES('$id_empleado','$nombres','$apellidos','$email','$telefono','$fecha_contratacion','$id_trabajo','$salario','$comision','$id_manager','$id_departamento','$confirmar')";
//ejecutamos la sentencia de sql
$resul=mysqli_query($conectar,$sql) or trigger_error("Query Failed ! SQL - Error:".mysqli_error($conectar));
echo $sql;

header("Location: Formulario2.html");
exit();
?>
