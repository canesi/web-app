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

  //id cliente para asignarle el contacto
  $id_cliente = $_POST['cliente'];
  //datos contacto
  $nombre = $_POST['nombre_contacto'];
  $apellido = $_POST['apellido_contacto'];
  $telefono = $_POST['telefono_contacto'];
  $extension = $_POST['extension_contacto'];
  $correo = $_POST['correo_contacto'];
  //datos adicionales
  $observaciones = $_POST['observaciones'];
  $comentarios = $_POST['comentarios'];

  $success = '<div class="alert alert-success"><strong>Exito!</strong> el contacto ha sigo guardado .</div>';

  /* comprobar la conexión */
  if (mysqli_connect_errno()) {
      //si hay algun error al conectar a la base de datos
      printf("Falló la conexión: %s\n", mysqli_connect_error());
      exit();
  }else if(!empty($nombre) AND !empty($apellido) AND !empty($correo)){
      //guardar cliente en la base de datos
      $query_contacto = "INSERT INTO contacto (nombre,apellido,telefono,extension,correo,servicio,descripcion_servicio,observacion,comentario,cliente) VALUES ('".$nombre."','".$apellido."','".$telefono."','".$extension."','".$correo."','','','".$observaciones."','".$comentarios."','".$id_cliente."')";
      mysqli_query($conn,"SET CHARSET utf8");
      mysqli_query($conn,$query_contacto);
      echo "<script>
            alert('Contacto guardado con exito!');
            window.location.href='../AgregarContacto.php';
            </script>";
  }

  //cerrar la conexion
  mysqli_close($conn);
?>
