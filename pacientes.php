<?php
    require_once ("conex.php");
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pacientes</title>
  <link rel="stylesheet" href="src/main.css" />
</head>
<body>

    <?php
    $sql = "select * from paciente";
    $resultado = $conn->query($sql);
    if(mysqli_num_rows($resultado)>0){  
    ?> 
<h2 class="text-3xl text-gray-900 text-center"> Listado de Pacientes</h2>
    <table class="table-auto  bg-gray-900 text-white">
  <thead >
    <tr class="border-2 border-gray-300 border-solid">
      <th  class="border-2 border-gray-300 border-solid">Nombre</th>
      <th class="border-2 border-gray-300 border-solid">Apellido</th>
      <th class="border-2 border-gray-300 border-solid">Cedula</th>
      <th class="border-2 border-gray-300 border-solid">Editar</th>
       <th class="border-2 border-gray-300 border-solid">Eliminar</th>
    </tr>
  </thead>
  <tbody>

<?php
    while($fila = mysqli_fetch_assoc($resultado)){
  ?>      
<tr>
    <td>    <?php
         echo  $fila["Nombre"];

      ?> </td>
       <td>    <?php
         echo  $fila["Apellido"];

     ?> </td>
       <td>    <?php
         echo  $fila["Cedula"];

     ?> </td>
    


    <?php
}}else{
    echo "no hay registros";
}
    ?>


    <?php
    mysqli_close($conn);
  ?>  
</body>
</html>