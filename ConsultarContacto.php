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
        //parametros a recibir
        $username = $_SESSION['username'];
        $user_type = $_SESSION['user_type'];
    }
?>

<!DOCTYPE html>
<html>
<head>
    <?php
      $title = "Consultar Contacto";
      include 'Plantilla/header.php';
    ?>
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
                <h2>Consultar Contacto</h2>
            </div>
        </div>
        <section id="show_data">
          <div class="container">
            <div class="row">
                  <div class="well well-sm"><h4>Ver contactos de Clientes</h4></div>
                  <div class="col-sm-6 col-md-4 col-md-offset-4">
                    <!-- nombre del cliente -->
                    <div class="form-group">
                      <label for="cliente">Cliente:</label>
                      <select class="form-control" id="cliente" name="cliente" required>
                        <option value="">Seleccione el cliente</option>
                        <?php
                          $query = "SELECT cliente_id,nombre FROM cliente ORDER BY nombre DESC";
                          $result = mysqli_query($conn,$query);

                          if(mysqli_num_rows($result)>0){
                              while($row = mysqli_fetch_assoc($result)) {
                                  echo "<option value=".$row["cliente_id"].">".$row["nombre"]."</option>";
                              }
                          }
                        ?>
                      </select>
                    </div>
                    <div>
                      <span id="error"></span>
                    </div>
                    <div>
                      <button type="button" id="btn_buscar" class="btn btn-primary" onclick="getContactos()">Buscar</button>
                    </div>
                  </div>

            </div>
            <h2>Listado de Contactos</h2>
            <div class="form" id="registros">
            </div>
          </div>
        </section>

    </div>
  <script type="text/javascript" src="js/buscar_contactos.js"></script>
</body>

<footer>
  <?php include 'Plantilla/footer.php'; ?>
</footer>
</html>
