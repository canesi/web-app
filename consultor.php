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
      $title = "Dashboard";
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

 <footer>
    <?php include 'Plantilla/footer.php'; ?>
 </footer>
</body>
</html>
