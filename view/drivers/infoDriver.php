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
    <!-- ICON -->
    <link rel="shortcut icon" href="../../img/icon.png" type="image/x-icon">
    <!-- LOCAL CSS -->
    <link rel="stylesheet" type="text/css" href="../../css/menu.css">
    <link rel="stylesheet" type="text/css" href="../../css/main.css">
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
    <!-- ------------------------------------------------------------------------------------ -->
    <!-- ------------------------------------------------------------------------------------ -->
    <!-- SECTION ONE -->
    <section id="section-one">
        <div class="row d-block pl-phone">
            <h2 class="title-principaly ml-1">Información Conductor</h2>
        </div>
        <div class="row">
            <div class="col s12 center-align ">
                <form action="../../controller/drivers/update/updateDriver.php" class="col s10 m-auto f-none  ml-2 ml-0-phone" method="POST">
                    <?php
                        $id=$_POST['id'];
                        //Invocacion de la función para cargar conductores
                        driverInformation($id);
                    ?> 
                    <div class="row">
                        <div class="float-r right-align d-flex-alter mb-3">
                            <a href="drivers.php" class="btn btn-actions btn-disabled mr-1">
                                Volver
                            </a>
                                <button type="button" class="btn btn-actions btn-color-primary mr-1" id="mod" >Modificar</button>

                                <button type="submit" class="btn btn-actions btn-color-primary seleccionar" id="save" disabled>Guardar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </section> 
    <!-- ./ FIRST SECTION  -->
    <footer>
        <h5 class="text-center text-footer">Desarrollado por Jonathan Bohórquez - CUN &copy; </h5>
    </footer>
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <!-- LOCAL JAVASCRIPT -->
    <script type="text/javascript" src="../../js/menu.js"></script>
    <script type="text/javascript" src="../../js/modificarUser.js"></script>
    <script type="text/javascript" src="../../js/loader.js"></script>

</body>
</html>