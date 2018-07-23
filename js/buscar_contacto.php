<?php
  /*incluir script de conexion*/
  include('../connect.php');
  /*crear instancia de la clase conexion*/
  $con = new Conexion;
  /*usar metodo de conectar*/
  $conn = $con->conectar();
  //parametros a recibir
  $id_cliente = $_GET['id_cliente'];

  if(mysqli_connect_errno()){
    //si hay algun error al conectar a la base de datos
    printf("Falló la conexión: %s\n", mysqli_connect_error());
    exit();
  }else{
    $query = "SELECT nombre,apellido,telefono,extension,correo FROM contacto WHERE cliente = '".$id_cliente."' ";
    $result = mysqli_query($conn,"SET CHARSET utf8");
    $result = mysqli_query($conn,$query);
    echo '<table class="table table-hover">';
    echo "<thead>";
    echo "<tr>";
    echo "<th>Nombre</th>";
    echo "<th>Apellido</th>";
    echo "<th>Telefono</th>";
    echo "<th>Extension</th>";
    echo "<th>Correo</th>";
    echo "</tr>";
    echo "</thead>";
    echo "<tbody>";
    if(mysqli_num_rows($result)>0){
        while($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>".$row['nombre']."</td>";
            echo "<td>".$row['apellido']."</td>";
            echo "<td>".$row['telefono']."</td>";
            echo "<td>".$row['extension']."</td>";
            echo "<td>".$row['correo']."</td>";
            echo "</tr>";
        }
    }
    echo "</tbody>";
    echo "</table>";
  }
?>
