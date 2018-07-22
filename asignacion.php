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
      $title = "Asignacion";
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
                <h2>Asignar Cuestionario</h2>
            </div>
            <div class="panel panel-default">
                <div class="panel-body">
                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#NewAsignModal">Nueva Asignacion</button>
                </div>
            </div>
            <p><h3>Consultar cuestionarios Asignados</h3></p>
        </div>

        <?php
            include '/modal/asignar_cuestionario.php';
        ?>

        <section id="select_data">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-2">
                        <div class="panel panel-default">
                            <div class="panel-heading">Tipo Usuario</div>
                            <div class="panel-body">
                                <select class="selectpicker">
                                    <option>Mustard</option>
                                    <option>Ketchup</option>
                                    <option>Relish</option>
                                </select>
                            </div><!-- panel body-->
                          </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-2">
                        <div class="panel panel-default">
                            <div class="panel-heading">Tipo Cliente</div>
                            <div class="panel-body">
                                <select class="selectpicker">
                                    <option>Mustard</option>
                                    <option>Ketchup</option>
                                    <option>Relish</option>
                                </select>
                            </div>
                          </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-2">
                        <button type="button" class="btn btn-primary btn-md" style="align-content: center" id="btn_buscar">
                            Buscar
                        </button>
                    </div>
                </div>
            </div>
        </section>

        <section id="show_data">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-3 col-sm-2">
                        <p>Section 1</p>
                    </div>
                    <div class="col-lg-4 col-md-3 col-sm-2">
                        <p>Section 2</p>
                    </div>
                    <div class="col-lg-4 col-md-3 col-sm-2">
                        <p>Section 3</p>
                    </div>
                </div>
            </div>
        </section>

    </div>

 <footer>
    <?php include 'Plantilla/footer.php'; ?>
 </footer>
</body>
</html>
