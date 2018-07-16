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

  //datos correo_contacto
  $nombre_contacto = $_POST['nombre_contacto'];
  $apellido_contacto = $_POST['apellido_contacto'];
  $telefono_contacto = $_POST['telefono_contacto'];
  $extension = $_POST['extension_contacto'];
  $email_contacto = $_POST['email_contacto'];
  //datos adicionales
  $obervaciones = $_POST['observaciones'];
  $comentarios = $_POST['comentarios'];

  $success = '<div class="alert alert-success"><strong>Exito!</strong> el contacto ha sigo guardado .</div>';

  /* comprobar la conexión */
  if (mysqli_connect_errno()) {
      //si hay algun error al conectar a la base de datos
      printf("Falló la conexión: %s\n", mysqli_connect_error());
      exit();
  }else if(!empty($nombre) AND !empty($direccion) AND !empty($telefono) AND !empty($email)){
      //guardar cliente en la base de datos
      $query = "INSERT INTO cliente (nombre,direccion,telefono,correo) VALUES ('".$nombre."','".$direccion."','".$telefono."','".$email."')";
      mysqli_query($conn,$query);
      flag = "1";
      echo "<script>
            alert('Cliente guardado con exito!');
            window.location.href='../AgregarContacto.php';
            </script>";
  }

  //cerrar la conexion
  mysqli_close($conn);

  if(strcmp($flag,"1")==0){
    //recuperar el id del cliente guardados
    query_client = "SELECT cliente_id FROM cliente ORDER BY cliente_id DESC LIMIT 1";
    $result = mysqli_query($conn,$query_client);

    if(mysqli_num_rows($result)>0){
        while($row = mysqli_fetch_assoc($result)) {
            $id_cliente = $row["cliente_id"];
        }
    }

    //se guardo correctamente
    //mostrar mensaje
    $_SESSION['sucess'] = $success;
    header("Location: ../NuevoCliente.php");
  }else{

  }

?>
