<?php
    //validar si el usuario inicio session en la app
    session_start();
	if ($_SESSION['login_status'] != 1) {
        header("location: login.php");
		exit;
    }else{
        $username = $_SESSION['username'];
    }

?>

<!DOCTYPE html>
<html>
<head>
    <?php
        $title = "Dashboard";
        include '/Plantilla/header.php';
    ?>
</head>
<body>
    <nav>
        <?php
            include '/Plantilla/navbar.php';
        ?>
    </nav>

    <footer>
        <?php
            include '/Plantilla/footer.php';
        ?>
    </footer>
</body>
</html>
