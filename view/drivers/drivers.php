<?php
    require_once('../../controller/drivers/read/load.php');
?>
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
        <!-- DATATABLE -->
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.23/css/jquery.dataTables.min.css">
        <!-- ICON -->
        <link rel="shortcut icon" href="../../img/icon.png" type="image/x-icon">
        <!-- LOCAL CSS -->
        <link rel="stylesheet" type="text/css" href="../../css/menu.css">
        <link rel="stylesheet" type="text/css" href="../../css/main.css">
        <link rel="stylesheet" type="text/css" href="../../css/table.css">

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
    <?php include('../header.php') ?>
    <!-- ---------------------------------------------------------------------------------- -->
    <!-- SECTION ONE -->
    <section id="section-one">
        <div class="row d-block pl-phone">
            <h2 class="title-principaly ml-1">Conductores</h2>
            <div class="ml-1 text-helper">
                <span class="pt-5">En esta sección podrás encontrar todos los conductores que se han registrado en el sistema.</span>
            </div>
            <div class="right-align show-only-desktop m-14">
                <a href="registerDriver.php"><button class="btn">Registrar conductor</button></a>
            </div>
            <div class="fixed-action-btn show-only-phone">
                <a class="btn-floating btn-large color-primary" href="registerDriver.php">
                    <i class="fas fa-plus"></i>
                </a>
            </div>
        </div>
        <div class="row">
            <table class="display table dataTable table-striped table-sm" cellspacing="0">
                <!--Consultamos los conductores registrados y los pintamos a continuación-->
                <?php loadDriver(); ?>
            </table>
        </div>   
    </section> 
    <!-- ./ FIRST SECTION  -->
    <footer>
        <h5 class="text-center text-footer">Prueba técnica - Jonathan Bohórquez &copy; </h5>
    </footer>

    <!-- SCRIPTS -->
    <!-- ALERTS -->
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <!-- JQUERY :/ -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- DATATABLE JS -->
    <script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
    <!-- LOCAL JAVASCRIPT -->
    <script type="text/javascript" src="../../js/menu.js"></script>
    <script type="text/javascript" src="../../js/table.js"></script>
    <script type="text/javascript" src="../../js/viewUser.js"></script>
    <script type="text/javascript" src="../../js/deleteUser.js"></script>
    <script type="text/javascript" src="../../js/loader.js"></script>
    <script type="text/javascript" src="../../js/check-user.js"></script>


</body>
</html>
