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
      $title = "Nuevo Cliente";
      include 'Plantilla/header.php';
    ?>
    <script type="text/javascript" src="js/asignacion.js"></script>
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
                <h2>Nuevo Cliente</h2>
            </div>
        </div>

        <section id="select_">
          <div class="container" id="select_data">
            <form action="controller/NuevoClienteController.php" method="post">
            <!-- datos del cliente -->
            <div class="row">
              <div class="well well-sm"><h4>Datos del Cliente</h4></div>
                <div class="col-sm-6 col-md-4 col-md-offset-4">
                  <!-- nombre cliente -->
                  <div class="form-group">
                    <label for="nombre">Nombre:</label>
                    <input type="text" class="form-control" id="nombre" placeholder="ingresa nombre" name="nombre" required>
                  </div>
                  <!-- direccion -->
                  <div class="form-group">
                    <label for="direccion">Direccion:</label>
                    <input type="text" class="form-control" id="direccion" placeholder="ingresa direccion" name="direccion" required>
                  </div>
                  <!-- telefono -->
                  <div class="form-group">
                    <label for="telefono">Telefono:</label>
                    <input type="number" class="form-control" id="telefono" placeholder="ingresa telefono" name="telefono" required>
                  </div>
                  <!-- correo -->
                  <div class="form-group">
                    <label for="correo">Correo:</label>
                    <input type="email" class="form-control" id="correo" placeholder="ingresa correo" name="correo" required>
                  </div>
                  <!-- tipo cliente -->
                  <div class="form-group">
                    <label for="tipo_cliente">Tipo de Empresa:</label>
                    <select name="tipo_cliente" class="form-control" required>
                      <option value="">Seleccione el tipo de empresa</option>
                      <option value="Pequeña">Peque&ntilde;a</option>
                      <option value="Mediana">Mediana</option>
                      <option value="Grande">Grande</option>
                    </select>
                  </div>
                  <!-- correo -->
                  <div class="form-group">
                    <label for="giro_negocio">Giro del Negocio:</label>
                    <input type="text" class="form-control" id="giro_negocio" placeholder="ingresa el giro del negcio" name="giro_negocio" required>
                  </div>
              </div>
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
                <!-- tipo de servicio de interes -->
                <div class="form-group">
                  <label for="servicio">Servicio de Interes:</label>
                  <select class="form-control" name="servicio" required>
                    <option value="">selecciona el servicio</option>
                    <option value="aplicaciones moviles">Desarrollo - Aplicaciones Moviles</option>
                    <option value="inteligencia de negocios">Desarrollo - Intelligencia de Negocios</option>
                    <option value="analisis y diseño de sistemas">Desarrollo - Analisis y Dise&ntilde;o de Sistemas</option>
                    <option value="infraestructura y soporte">Infraestructura - Infraestructura y Soporte</option>
                    <option value="servicios en la nube">Infraestructura - Servicios en la Nube</option>
                    <option value="administracion base de datos">Asesoria y Soporte - Administracion de Base de Datos</option>
                    <option value="">Asesoria y Soporte - Outsourcing de IT</option>
                    <option value="">Asesoria y Soporte - Evaluacion de Software</option>
                    <option value="">Asesoria y Soporte - Cursos Oficiales Microsoft</option>
                  </select>
                </div>
                <!-- observaciones -->
                <div class="form-group">
                  <label for="descripcion_servicio">Descripcion del Servicio:</label>
                  <textarea class="form-control" rows="2" id="descripcion_servicio" name="descripcion_servicio" required></textarea>
                </div>
                <!-- observaciones -->
                <div class="form-group">
                  <label for="observaciones">Observaciones:</label>
                  <textarea class="form-control" rows="6" id="observaciones" name="observaciones"></textarea>
                </div>
                <!-- comentarios -->
                <div class="form-group">
                  <label for="comentarios">Comentarios:</label>
                  <textarea class="form-control" rows="6" id="comentarios" name="comentarios"></textarea>
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
    <?php include 'Plantilla/footer_out.php'; ?>
 </footer>
</body>
</html>
