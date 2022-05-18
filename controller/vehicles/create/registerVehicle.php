<?php
   require_once('../../../model/conexion/conexion.php');
   require_once('../../../model/query/vehicles/query.php');
   require_once('../../modales/modal.php');

   //Variables
   $license_plate = trim($_POST['license_plate']);
   $colour = trim($_POST['colour']);
   $mark = trim($_POST['mark']);
   $type_of_vehicle = trim($_POST['type_of_vehicle']);
   $id_owner = trim($_POST['id_owner']);
   $id_driver = trim($_POST['id_driver']);

   $consultas=new consultas();
   $result=$consultas->consultDoc($license_plate);

   if(isset($result)){
      modalAlert('Placa del vehículo ya registrada','../../../view/vehicles/registerVehicle.php','warning',3);
   }else{
      $consultas=new consultas();
      $result=$consultas->registerVehicle($license_plate, $colour, $mark, $type_of_vehicle, $id_owner, $id_driver);
   }
?>