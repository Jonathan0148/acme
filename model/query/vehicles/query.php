<?php  
	class consultas{
		public function showVehicles(){//Funcion para consultar vehiculos
			//Toma el resultado de la consulta
			$resultado = null;
			//CONECTION DATA BASE
			$modelo = new conexion();
			$conexion = $modelo->post_conexion();
			
			//QUERY SQL
			$sql = "SELECT vehicle.license_plate, vehicle.mark, driver.first_name as name_driver, driver.second_name as name_two_driver,
			driver.last_name as last_name_driver, owner.first_name as name_owner, owner.second_name as name_two_owner,
			owner.last_name as last_name_owner FROM vehicle INNER JOIN driver ON vehicle.id_driver = driver.id 
			INNER JOIN owner ON vehicle.id_owner = owner.id"; 
			$result = $conexion->prepare($sql);
			//PDO
			$result->execute();

			//Cargar el resultado a la variable resultado
			while ($f = $result->fetch()) {
				$resultado[] = $f;
			}
			return $resultado;
		}//Cierre mirar vehiculos

		//Funcion para añadir vehiculos
		public function registerVehicle($license_plate, $colour, $mark, $type_of_vehicle, $id_owner, $id_driver){
			//CONECTION DATA BASE
			$modelo = new conexion();
			$conexion = $modelo->post_conexion();
			//QUERY SQL
			$sql = "INSERT INTO vehicle(license_plate, colour, mark, type_of_vehicle, id_owner, id_driver)
			 VALUES(:license_plate, :colour, :mark, :type_of_vehicle, :id_owner, :id_driver)";

			// PDO
			$result = $conexion->prepare($sql);
			$result->bindParam(":license_plate", $license_plate);
			$result->bindParam(":colour", $colour);
			$result->bindParam(":mark", $mark);
			$result->bindParam(":type_of_vehicle", $type_of_vehicle);
			$result->bindParam(":id_owner", $id_owner);
			$result->bindParam(":id_driver", $id_driver);
			
			//QUERY RESULT
			if (!$result){
				modalAlert('Error al registrar','../.././view/vehicles/registerVehicles.php','error',3);
			}else {		
				$result->execute();
				modalAlert('Vehículo registrado','../../../view/vehicles/vehicles.php','success',3);
        	}
	  	}//Cierra insertar vehículos

	  	public function vehicleInfo($id){//Funcion para ver la informacion del vehículo
			//VARIABLES
			$resultado = null;
			//CONECTION DATA BASE
			$modelo = new conexion();
			$conexion = $modelo -> post_conexion();
			//QUERY SQL
			$sql = "SELECT vehicle.license_plate, vehicle.colour, vehicle.mark, vehicle.type_of_vehicle, 
			driver.id as id_driver, driver.first_name as name_driver, driver.second_name as name_two_driver,
			driver.last_name as last_name_driver, owner.id as id_owner, owner.first_name as name_owner, owner.second_name as name_two_owner,
			owner.last_name as last_name_owner  FROM vehicle INNER JOIN driver ON vehicle.id_driver = driver.id 
			INNER JOIN owner ON vehicle.id_owner = owner.id WHERE license_plate = :id";
			//PDO
			$result = $conexion -> prepare($sql);
			$result->bindParam(':id',$id);
			$result -> execute();

			while ($f=$result->fetch()) {
				$resultado[]=$f;
			}
			return $resultado;
		}//cierra informacion vehículo

		public function updateVehicle($license_plate, $colour, $mark, $type_of_vehicle, $id_owner, $id_driver){//funcion para actualizar los vehiculos
			//CONECTION DATA BASE
			$modelo=new conexion();
			$conexion=$modelo->post_conexion();
			//QUERY SQL
			$sql="UPDATE vehicle SET colour=:colour, mark=:mark, type_of_vehicle=:type_of_vehicle, id_owner=:id_owner, 
			id_driver=:id_driver WHERE license_plate=:license_plate";

			// PDO
			$result = $conexion->prepare($sql);
			$result->bindParam(":license_plate",$license_plate);			
			$result->bindParam(":colour",$colour);
			$result->bindParam(":mark",$mark);
			$result->bindParam(":type_of_vehicle",$type_of_vehicle);			
			$result->bindParam(":id_owner",$id_owner);			
			$result->bindParam(":id_driver",$id_driver);
			
			//QUERY RESULT
			if (!$result){
				modalAlert('Error al modificar' , '../../../view/vehicles/infoVehicles.php' , 'warning' , '3');
			}else {	
				$result->execute();
				modalAlert('Actualización exitosa' , '../../../view/vehicles/vehicles.php' , 'success' , '3');
			}
		}//cierra actualizar propietarios

		public function consultDoc($license_plate){//funcion para averiguar la placa del vehiculo
			//VARIABLES
			$resultado = null;
			//CONECTION DATA BASE
			$modelo = new conexion();
			$conexion = $modelo -> post_conexion();
			//QUERY SQL
			$sql = "SELECT * FROM vehicle WHERE license_plate=:license_plate";
			//PDO
			$result = $conexion -> prepare($sql);
			$result->bindParam(':license_plate',$license_plate);
			$result -> execute();

			while ($f=$result->fetch()) {
				$resultado[]=$f;
			}
			return $resultado;
		}//cierra consulta vehiculo

		public function deleteVehicle($license_plate){
            //CONECTION DATA BASE
            $modelo=new conexion();
            $conexion=$modelo->post_conexion();
            //QUERY SQL
            $sql="DELETE FROM vehicle WHERE license_plate=:license_plate";

            // PDO
            $result = $conexion->prepare($sql);
            $result->bindParam(":license_plate",$license_plate);

            //QUERY RESULT
            if (!$result){
				modalAlert('Error al eliminar','../../../view/vehicle/vehicle.php','error',3);
			}else {
				$result->execute();
				modalAlert('Vehículo eliminado exitosamente','../../../view/vehicles/vehicles.php','success',3);
			}

        }

		public function drivers(){//Función para traer todos los conductores registrados en el sistema
			//VARIABLES
			$resultado = null;
			//CONECTION DATA BASE
			$modelo = new conexion();
			$conexion = $modelo -> post_conexion();
			//QUERY SQL
			$sql = "SELECT driver.id, driver.first_name, driver.last_name FROM driver";
			//PDO
			$result = $conexion -> prepare($sql);
			$result -> execute();

			while ($f=$result->fetch()) {
				$resultado[]=$f;
			}
			return $resultado;
		}//Cierra drivers

		public function owners(){//Función para traer todos los propietarios registrados en el sistema
			//VARIABLES
			$resultado = null;
			//CONECTION DATA BASE
			$modelo = new conexion();
			$conexion = $modelo -> post_conexion();
			//QUERY SQL
			$sql = "SELECT owner.id, owner.first_name, owner.last_name FROM owner";
			//PDO
			$result = $conexion -> prepare($sql);
			$result -> execute();

			while ($f=$result->fetch()) {
				$resultado[]=$f;
			}
			return $resultado;
		}//Cierra owners

	}//Cierre clase consultas
?>