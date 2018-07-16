<?php
    //validar si el usuario inicio session en la app
    session_start();
	if ($_SESSION['login_status'] != 1) {
        header("location: login.php");
		exit;
    }else{
        $username = $_SESSION['username'];
        $user_type = $_SESSION['user_type'];
    }
?>

<!DOCTYPE html>
<html>
<head>
    <?php
      $title = "Nuevo Contacto";
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
                <h2>Nuevo Contacto</h2>
                <p>Agregar contactos a clientes ya existentes</p>
            </div>
        </div>

        <section id="select_" class="scrollable">
          <div class="container" id="select_data">
            <form action="controller/NuevoClienteController.php" method="post">
            <!-- buscar cliente -->
            <div class="row">
            </div>
            <!-- datos contacto -->
            <div class="row">
              <div class="well well-sm"><h4>Datos del contacto</h4></div>
              <div class="col-sm-6 col-md-4 col-md-offset-4">
                <!-- nombre contacto -->
                <div class="form-group">
                  <label for="nombre_contacto">Nombre:</label>
                  <input type="text" class="form-control" id="nombre_contacto" placeholder="ingresa nombre contacto" name="nombre_contacto" required>
                </div>
                <!-- apellido contacto -->
                <div class="form-group">
                  <label for="apellido">Apellido:</label>
                  <input type="text" class="form-control" id="apellido_contacto" placeholder="ingresa apellido contacto" name="apellido_contacto" required>
                </div>
                <!-- telefono contacto -->
                <div class="form-group">
                  <label for="telefono_contacto">Telefono:</label>
                  <input type="number" class="form-control" id="telefono_contacto" placeholder="ingresa telefono contacto" name="telefono_contacto" required>
                </div>
                <!-- extension telefono contacto -->
                <div class="form-group">
                  <label for="extension_contacto">Extension:</label>
                  <input type="number" class="form-control" id="extension_contacto" placeholder="ingresa la extension contacto" name="extension_contacto">
                </div>
                <!-- correo contacto -->
                <div class="form-group">
                  <label for="correo_contacto">Correo:</label>
                  <input type="text" class="form-control" id="correo_contacto" placeholder="ingresa correo contacto" name="correo_contacto" required>
                </div>
              </div>
            </div>
            <!-- datos adicionales-->
            <div class="row">
              <div class="well well-sm"><h4>Datos Adicionales</h4></div>
              <div class="col-sm-6 col-md-4 col-md-offset-4">
                <!-- observaciones -->
                <div class="form-group">
                  <label for="observaciones">Observaciones:</label>
                  <textarea class="form-control" rows="6" id="observaciones" name="observaciones"></textarea>
                </div>
                <!-- comentarios -->
                <div class="form-group">
                  <label for="comentarios">Comentarios:</label>
                  <textarea class="form-control" rows="6" id="comentarios" name="comanterios"></textarea>
                </div>
              </div>
            </div>
            <!-- botones -->
            <div class="row">
              <div class="well well-sm"></div>
              <div class="col-sm-6 col-md-4 col-md-offset-4">
                <!-- enviar datos -->
                <button type="submit" class="btn btn-primary">Guardar
                  <?php
                      if(isset($_SESSION["success"])){
                          //$success = $_SESSION["success"];
                          echo "<script type='text/javascript'>alert('Cliente guardado con exito!');</script>";
                      }
                  ?>
                </button>

                <!-- limpiar formulario -->
                <button type="reset" class="btn btn-primary">Limpiar</button>
                <!-- cancelar la digitacion del nuevo cliente -->
                <button type="button" class="btn btn-primary" onclick="cancelar()">Cancelar
                  <script type="text/javascript">
                    function cancelar(){
                      alert('desea salir?');
                      window.location.href='consultor.php';
                    }
                  </script>
                </button>
              </div>
            </div>
        </form>
      </div>
    </section>
  </div>

 <footer>
    <?php include 'Plantilla/footer.php'; ?>
 </footer>
</body>
</html>
