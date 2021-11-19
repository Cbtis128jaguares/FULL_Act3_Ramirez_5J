<?php 

include("con_db.php");

if (isset($_POST['reg'])) {

    if (strlen($_POST['id_trabajador']) >= 1 && 
	strlen($_POST['Edad']) >= 1 &&
	strlen($_POST['Nombrecompleto']) >= 1 &&
	strlen($_POST['Turnodeempleado']) >= 1 &&
	strlen($_POST['Numerodetelefono']) >= 1 )
	
	{



	    $id_trabajador = trim($_POST['id_trabajador']);
	    $Edad = trim($_POST['Edad']);
	    $Nombrecompleto =  trim($_POST['NombreCompleto']);
		$Turnodeempleado =  trim($_POST['Turnodeempleado']);
		$Numerodetelefono =  trim($_POST['Numerodetelefono']);



	    $consulta = "INSERT INTO empleado(id_trabajador, Edad, NombreCompleto, Turnodeempleado, Numerodetelefono) VALUES ('$id_trabajador','$Edad','$NombreCompleto','
		'$Turnodeempleado','$Numerodetelefono')";
	    $resultado = mysqli_query($conex,$consulta);
	    if ($resultado) {
	    	?> 
	    	<h3 class="ok">¡Te has inscripto correctamente!</h3>
           <?php
	    } else {
	    	?> 
	    	<h3 class="bad">¡Ups ha ocurrido un error!</h3>
           <?php
	    }
    }   else {
	    	?> 
	    	<h3 class="bad">¡Por favor complete los campos!</h3>
           <?php
    }
}

?>