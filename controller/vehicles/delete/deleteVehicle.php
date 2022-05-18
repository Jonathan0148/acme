<?php
require_once('../../../model/conexion/conexion.php');
require_once('../../../model/query/vehicles/query.php');
require_once('../../modales/modal.php');

$license_plate = $_POST['id'];
if(strlen($license_plate ) > 0){
    $queries = new consultas();
    $result=$queries-> deleteVehicle($license_plate);
}

// echo deleteOb();
?>

