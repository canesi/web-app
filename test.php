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
        $title = "Test Page"; 
        include 'Plantilla/header.php'; 
    ?>
</head>

<body>
    <nav>
        <?php 
            include 'Plantilla/navbar.php'; 
        ?>
    </nav>
    <div class="wrapper">
        <div class="container">
            <div class="jumbotron">
                <h1>Bootstrap Tutorial</h1> 
                <p>Bootstrap is the most popular HTML, CSS, and JS framework for developing
                responsive, mobile-first projects on the web.</p> 
            </div>
            <p>This is some text.</p> 
            <p>This is another text.</p> 
        </div>

        <section id="info">
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

        <section id="info1">
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

        <section id="info3" style="height: 500px;">
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