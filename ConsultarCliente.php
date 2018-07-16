<?php
    //validar si el usuario inicio session en la app
    session_start();
	if ($_SESSION['login_status'] != 1) {
        header("location: login.php");
		exit;
    }else{
        //controlador para guardar el nuevo cliente
        /*incluir script de conexion*/
        include('connect.php');

        /*crear instancia de la clase conexion*/
        $con = new Conexion;

        /*usar metodo de conectar*/
        $conn = $con->conectar();

        $username = $_SESSION['username'];
        $user_type = $_SESSION['user_type'];
    }
?>

<!DOCTYPE html>
<html>
<head>
    <?php
      $title = "Consultar Cliente";
      include 'Plantilla/header.php';
    ?>
    <script type="text/javascript" src="js/asignacion.js"></script>
    <style>
      #select_{
        max-height: 600px; /*add height as you want*/
        overflow-y: auto;
      }
    </style>
</head>

<body>
  <nav>
    <?php
      if(strcmp($user_type,"1")==0){
        include 'Plantilla/navbar.php';
      }else{
        include 'Plantilla/navbar_consultor.php';
      }
    ?>
  </nav>

    <div class="wrapper">

        <div class="container">
            <div class="jumbotron">
                <h2>Consultar Cliente</h2>
            </div>
        </div>
        <section id="show_data">
          <div class="container">
            <h2>Listado de Clientes</h2>
            <table class="table table-hover">
              <thead>
                <tr>
                  <th>Nombre</th>
                  <th>Direccion</th>
                  <th>Telefono</th>
                  <th>Correo</th>
                  <th>Tipo Cliente</th>
                  <th>Giro del Negocio</th>
                  <th>Fecha Creacion</th>
                  <th>Status</th>
                </tr>
              </thead>
              <tbody>
                <?php
                  $query = "SELECT nombre,direccion,telefono,correo,tipo_cliente,giro_negocio,fecha,status FROM cliente ORDER BY cliente_id";
                  $result = mysqli_query($conn,"SET CHARSET utf8");
                  $result = mysqli_query($conn,$query);
                  if(mysqli_num_rows($result)>0){
                      while($row = mysqli_fetch_assoc($result)) {
                          echo "<tr>";
                          echo "<td>".$row['nombre']."</td>";
                          echo "<td>".$row['direccion']."</td>";
                          echo "<td>".$row['telefono']."</td>";
                          echo "<td>".$row['correo']."</td>";
                          echo "<td>".$row['tipo_cliente']."</td>";
                          echo "<td>".$row['giro_negocio']."</td>";
                          echo "<td>".$row['fecha']."</td>";
                          $status = $row['status'];
                          if(strcmp($status,"1")==0){
                            $stat = "activo";
                          }
                          echo "<td>".$stat."</td>";
                          echo "</tr>";
                      }
                  }
                ?>
              </tbody>
            </table>
          </div>
        </section>
    </div>

 <footer>
    <?php include 'Plantilla/footer.php'; ?>
 </footer>
</body>
</html>
