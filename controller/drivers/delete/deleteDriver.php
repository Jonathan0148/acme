<?php
require_once('../../../model/conexion/conexion.php');
require_once('../../../model/query/drivers/query.php');
require_once('../../modales/modal.php');

$document = $_POST['id'];
if(strlen($document) > 0){
    $queries = new consultas();
    $result=$queries-> deleteDriver($document);
}

// echo deleteOb();
?>

