<?php
   require_once('../../../model/conexion/conexion.php');
   require_once('../../../model/query/drivers/query.php');
   require_once('../../modales/modal.php');

   //DEFINIR ZONA HORARIA
   date_default_timezone_set('America/Bogota');

   //Variables
   $first_name = trim($_POST['first_name']);
   $second_name = trim($_POST['second_name']);
   $last_name = trim($_POST['last_name']);
   $document = trim($_POST['document']);
   $address = trim($_POST['address']);
   $phone = trim($_POST['phone']);
   $city = trim($_POST['city']);

   $consultas=new consultas();
   $result=$consultas->consultDoc($document);

   if(isset($result)){
      modalAlert('Documento ya registrado','../../../view/drivers/registerDriver.php','warning',3);
   }else{
      $consultas=new consultas();
      $result=$consultas->registerDriver($first_name, $second_name, $last_name, $document, $address, $phone, $city);
   }
?>