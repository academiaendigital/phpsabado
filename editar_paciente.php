<?php
require_once(" conex.php");?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Paciente</title>
</head>
<body>
    
<h2> Editar Paciente</h2>
<form id="editarpaciente" class="form"> 
    <label>Nombre</label>
    <input type="text" name="nombre" value ="<?php
         echo  $fila["Nombre"];

      ?>">

<input value="editar" class="bg-glue-600">
</form>

</body>
</html>