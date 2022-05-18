<?php
   require_once('../../../model/conexion/conexion.php');
   require_once('../../../model/query/drivers/query.php');
   require_once('../../modales/modal.php');

   //Variables
   $first_name = trim($_POST['first_name']);
   $second_name = trim($_POST['second_name']);
   $last_name = trim($_POST['last_name']);
   $document = trim($_POST['document']);
   $address = trim($_POST['address']);
   $phone = trim($_POST['phone']);
   $city = trim($_POST['city']);

   $consultas=new consultas();
   $result=$consultas->updateDriver($first_name, $second_name, $last_name, $document, $address, $phone, $city);

?>