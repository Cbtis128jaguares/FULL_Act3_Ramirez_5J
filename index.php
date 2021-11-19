<!DOCTYPE html>
<html>
<head>
	<title>Registro de Empleado</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
    <form method="post">
    	<h1>Alta de empleados!!</h1>
    	<input type="text" name="id_trabajador" placeholder="ID Empleado">
    	<input type="text" name="Edad" placeholder="Edad de empleado">
		<input type="text" name="Nombre Completo" placeholder="Nombre Completo">
		<input type="text" name="Turno de trabajo" placeholder="Turno de Trabajo">
		<input type="text" name="Numero de telefono" placeholder="Numero de Telefono">
    	<input type="submit" name="reg" value="reg">
    </form>
        <?php 
        include("Empleado.php");
        ?>
</body>
</html>