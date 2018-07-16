<?php
  //controlador para guardar el nuevo cliente
  /*incluir script de conexion*/
  include('../connect.php');

  /* iniciar la session */
  session_start();

  /*crear instancia de la clase conexion*/
  $con = new Conexion;

  /*usar metodo de conectar*/
  $conn = $con->conectar();

  //datos cliente
  $nombre = $_POST['nombre'];
  $direccion = $_POST['direccion'];
  $telefono = $_POST['telefono'];
  $email = $_POST['correo'];
  $tipo_cliente = $_POST['tipo_cliente'];
  $giro_negocio = $_POST['giro_negocio'];
  //datos correo_contacto
  $nombre_contacto = $_POST['nombre_contacto'];
  $apellido_contacto = $_POST['apellido_contacto'];
  $telefono_contacto = $_POST['telefono_contacto'];
  $extension = $_POST['extension_contacto'];
  $email_contacto = $_POST['correo_contacto'];
  //datos adicionales
  $servicio = $_POST['servicio'];
  $servicio_descrip = $_POST['descripcion_servicio'];
  $observacion = $_POST['observaciones'];
  $comentario = $_POST['comentarios'];

  $success = '<div class="alert alert-success"><strong>Exito!</strong> el cliente ha sigo guardado .</div>';

  /* comprobar la conexión */
  if (mysqli_connect_errno()) {
      //si hay algun error al conectar a la base de datos
      printf("Falló la conexión: %s\n", mysqli_connect_error());
      exit();
  }else if(!empty($nombre) AND !empty($direccion) AND !empty($telefono) AND !empty($email)){
      //guardar cliente en la base de datos
      $query = "INSERT INTO cliente (nombre,direccion,telefono,correo,tipo_cliente,giro_negocio) VALUES ('".$nombre."','".$direccion."','".$telefono."','".$email."','".$tipo_cliente."','".$giro_negocio."')";
      mysqli_query($conn,"SET CHARSET utf8");
      mysqli_query($conn,$query);
      $flag = "1";
  }

  if(strcmp($flag,"1")==0){
    //recuperar el id del cliente guardados
    $query_client = "SELECT cliente_id FROM cliente ORDER BY cliente_id DESC LIMIT 1";
    $result = mysqli_query($conn,$query_client);

      if(mysqli_num_rows($result)>0){
          while($row = mysqli_fetch_assoc($result)) {
              $id_cliente = $row["cliente_id"];
          }
      }

      if(empty($id_cliente)){
        //no se pudo recuperar el id del cliente creado
      }else{
        $query_contacto = "INSERT INTO contacto (nombre,apellido,telefono,extension,correo,servicio,descripcion_servicio,observacion,comentario,cliente) VALUES ('".$nombre_contacto."','".$apellido_contacto."','".$telefono_contacto."','".$extension."','".$email_contacto."','".$servicio."','".$servicio_descrip."','".$observacion."','".$comentario."','".$id_cliente."')";
        mysqli_query($conn,"SET CHARSET utf8");
        mysqli_query($conn,$query_contacto);
        //se guardo correctamente
        //mostrar mensaje
        $_SESSION['sucess'] = $success;
        echo "<script>
              alert('Cliente guardado con exito!');
              window.location.href='../NuevoCliente.php';
              </script>";
      }
  }else{
    //error al insertar el cliente
    echo "<script>
          alert('Error al insertar el cliente!');
          window.location.href='../NuevoCliente.php';
          </script>";
  }

  //cerrar la conexion
  mysqli_close($conn);

?>
