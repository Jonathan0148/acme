<!DOCTYPE html>
<html lang="es">
    <head>
        <!-- META´S -->
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="Compras de boletos en linea"/>
        <meta name="robots" content="index,follow"> 
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
        <!-- Google Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
        <!-- Compiled and minified CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
        <!-- ICON -->
        <link rel="shortcut icon" href="img/icon.png" type="image/x-icon">
        <!-- LOCAL CSS -->
        <link rel="stylesheet" type="text/css" href="css/menu.css">
        <link rel="stylesheet" type="text/css" href="css/main.css">
        <link rel="stylesheet" type="text/css" href="css/animations.css">
        <title>Prueba técnica</title>
    </head>
<body>  
    <div class="centrado" id="onload">
        <div class="wrapper">
            <div class="circle"></div>
            <div class="circle"></div>
            <div class="circle"></div>
            <div class="shadow"></div>
            <div class="shadow"></div>
            <div class="shadow"></div>
            <span>Cargando</span>
        </div>
    </div>
    <?php include('view/headerIndex.php') ?>
    <!-- ------------------------------------------------------------------------------------ -->
    <!-- ------------------------------------------------------------------------------------ -->
    <!-- SECTION ONE -->
  <section id="section-one">
        <div class="row d-block pl-phone animation">
            <h2 class="title-principaly ml-1">Inicio</h2>
        </div>
        <div class="row mt-3">

            <a href="view/vehicles/vehicles.php" class="nav-link text-right" id="">
                <div class="card text-right">
                    <div class="header-card">
                        <img src="img/vehiculos.png" alt="">
                    </div>
                    <div class="content-card">
                        <h3>Vehículos</h3>
                    </div>
                </div>
             </a>
             
             <a href="view/drivers/drivers.php"  class="nav-link text-left ml mt-2">
                <div class="card text-left ml mt-2">
                    <div class="header-card">
                        <img src="img/conductor.png" alt="">
                    </div>
                    <div class="content-card">
                        <h3>Conductores</h3>
                    </div>
                </div>
             </a>
        </div>   
  </section> 
 <!-- ./ FIRST SECTION  -->
    <footer>
        <h5 class="text-center text-footer">Prueba técnica - Jonathan Bohórquez &copy; </h5>
    </footer>
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
  <!-- LOCAL JAVASCRIPT -->
    <script type="text/javascript" src="js/menu.js"></script>
    <script type="text/javascript" src="js/loader.js"></script>
    <script type="text/javascript" src="js/urlHome.js"></script>
</body>
</html>
