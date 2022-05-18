<?php  
    require_once("../../model/conexion/conexion.php");
    require_once("../../model/query/vehicles/query.php");
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
    <?php include('../header.php'); ?>
    
    <!-- ------------------------------------------------------------------------------------ -->
    <?php 
        $consultas=new consultas();
        $result=$consultas->drivers();
        $resultTwo=$consultas->owners();
    ?>
    <!-- ------------------------------------------------------------------------------------ -->
    <!-- SECTION ONE -->
	<section id="section-one">
        <div class="row d-block pl-phone">
            <h2 class="title-principaly ml-1">Registro</h2>
            <div class="text-helper">
                <span class="ml-1 pt-5">Completa todos los campos del formulario para registrar un nuevo propietario.</span>
            </div>
        </div>
        <div class="row">
            <div class="col s12 center-align">
                <form action="../../controller/vehicles/create/registerVehicle.php" method="POST" class="col s10 m-auto f-none ml-2 ml-0-phone">
                    <div class="row">
                        <div class="input-field col s12 m6">
                            <input id="" type="text" class="validate input-control info-title"  minlength="3" name="license_plate" required data-title="Ingrese la placa del vehículo">
                            <label for="">Placa</label>
                        </div>
                        <div class="input-field col s12 m6">
                            <input id="" type="text" class="validate input-control info-title"  minlength="3" name="colour" required data-title="Ingrese el color del vehículo">
                            <label for="">Color</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12 m6">
                            <input id="" type="text" class="validate input-control info-title" minlength="3" name="mark" required data-title="Ingrese la marca del vehículo">
                            <label for="">Marca</label>
                        </div>
                        <div class="input-field col s12 m6 mt-2">
                            <div>
                                <label class="prefix-label">Tipo de vehículo</label>
                            </div>
                            <select class="browser-default" required name="type_of_vehicle" data-title="Ingrese el tipo de vehículo">
                              <option value="" disabled selected>Selecciona una opción</option>
                              <option value="Particular">Particular</option>
                              <option value="Público">Público</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12 m6 mt-2">
                            <div>
                                <label class="prefix-label">Propietario</label>
                            </div>
                            <select class="browser-default seleccionar" name="id_owner" data-title="Ingrese el propietario del vehículo" required>
                                <option value="">Selecciona una opción</option>
                                <?php
                                foreach($resultTwo as $f){
                                    echo '
                                    <option value="'.$f['id'].'">'.ucfirst($f['first_name']).' '.ucfirst($f['last_name']).'</option>';
                                }?>
                            </select>
                        </div>
                        <div class="input-field col s12 m6 mt-2">
                            <div>
                                <label class="prefix-label">Conductor</label>
                            </div>
                            <select class="browser-default seleccionar" name="id_driver" data-title="Ingrese el conductor de vehículo" required>
                                <option value="">Selecciona una opción</option>
                                <?php
                                foreach($result as $f){
                                    echo '
                                    <option value="'.$f['id'].'">'.ucfirst($f['first_name']).' '.ucfirst($f['last_name']).'</option>';
                                }?>
                            </select>
                        </div>
                    </div>
                    <div class="row mb-5-phone ">
                        <div class="float-r right-align d-flex-alter">
                            <a href="vehicles.php" class="btn btn-actions btn-disabled">
                                Volver
                            </a>
                            <button type="submit" class="btn btn-actions btn-color-primary">Enviar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>   
	</section> 
 <!-- ./ FIRST SECTION  -->
    <footer>
        <h5 class="text-center text-footer">Prueba técnica - Jonathan Bohórquez &copy; </h5>
    </footer>
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
	<!-- LOCAL JAVASCRIPT -->
    <script type="text/javascript" src="../../js/menu.js"></script>
    <script type="text/javascript" src="../../js/loader.js"></script>

</body>
</html>
