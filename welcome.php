<?php
    //manejar la session
    session_start();

    //recibir la session actual 
    $username = $_SESSION['username'];
?>

<!DOCTYPE html>
<html>
<head>
    <?php
      $title = "Welcome";  
      include '/Plantilla/header.php'; ?>
    <title>Welcome</title>
</head>

<body>
  <nav>
    <?php include '/Plantilla/navbar.php'; ?>
  </nav>

<!-- contenido de la pagina -->
 <div class="container">
    <p>Contenido principal</p>
    <a href="test.php">ir a test</a>
    <?php print_r("Bienvenido: ".$username); ?>
 </div>

 <?php include '/Plantilla/footer.php'; ?>

</body>
</html>