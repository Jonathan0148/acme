<?php  
	class consultas{
		public function showDrivers(){//Funcion para consultar conductores
			//Toma el resultado de la consulta
			$resultado = null;
			//CONECTION DATA BASE
			$modelo = new conexion();
			$conexion = $modelo->post_conexion();
			//QUERY SQL
			$sql = "SELECT * FROM driver"; 
			$result = $conexion->prepare($sql);
			//PDO
			$result->execute();

			//Cargar el resultado a la variable resultado
			while ($f = $result->fetch()) {
				$resultado[] = $f;
			}

			return $resultado;
		}//Cierre mirar conductores

		//Funcion para añadir conductores
		public function registerDriver($first_name, $second_name, $last_name, $document, $address, $phone, $city){
			//CONECTION DATA BASE
			$modelo = new conexion();
			$conexion = $modelo->post_conexion();
			//QUERY SQL
			$sql = "INSERT INTO driver(first_name, second_name, last_name, document, address, phone, city)
			 VALUES(:first_name, :second_name, :last_name, :document, :address, :phone, :city)";

			// PDO
			$result = $conexion->prepare($sql);
			$result->bindParam(":first_name", $first_name);
			$result->bindParam(":second_name", $second_name);
			$result->bindParam(":last_name", $last_name);
			$result->bindParam(":document", $document);
			$result->bindParam(":address", $address);
			$result->bindParam(":phone", $phone);
			$result->bindParam(":city", $city);
			
			//QUERY RESULT
			if (!$result){
				modalAlert('Error al registrar','../../../view/drivers/registerDriver.php','error',3);
			}else {		
				$result->execute();
				modalAlert('Conductor registrado','../../../view/drivers/drivers.php','success',3);
        	}
	  	}//Cierra insertar conductores

	  	public function driverInfo($id){//Funcion para ver la informacion del conductor
			//VARIABLES
			$resultado = null;
			//CONECTION DATA BASE
			$modelo = new conexion();
			$conexion = $modelo -> post_conexion();
			//QUERY SQL
			$sql = "SELECT * FROM driver WHERE document = :id";
			//PDO
			$result = $conexion -> prepare($sql);
			$result->bindParam(':id',$id);
			$result -> execute();

			while ($f=$result->fetch()) {
				$resultado[]=$f;
			}
			return $resultado;
		}//cierra informacion conductor

		public function updateDriver($first_name, $second_name, $last_name, $document, $address, $phone, $city){//funcion para actualizar los conductores
			//CONECTION DATA BASE
			$modelo=new conexion();
			$conexion=$modelo->post_conexion();
			//QUERY SQL
			$sql="UPDATE driver SET first_name=:first_name, second_name=:second_name, last_name=:last_name, 
			address=:address, phone=:phone, city=:city WHERE document=:document";

			// PDO
			$result = $conexion->prepare($sql);
			$result->bindParam(":first_name",$first_name);			
			$result->bindParam(":second_name",$second_name);
			$result->bindParam(":last_name",$last_name);
			$result->bindParam(":document",$document);
			$result->bindParam(":address",$address);			
			$result->bindParam(":phone",$phone);			
			$result->bindParam(":city",$city);
			
			//QUERY RESULT
			if (!$result){
				modalAlert('Error al modificar' , '../../../view/drivers/infoDriver.php' , 'warning' , '3');
			}else {	
				$result->execute();
				modalAlert('Actualización exitosa' , '../../../view/drivers/drivers.php' , 'success' , '3');
			}
		}//cierra actualizar conductores

		public function consultDoc($document){//funcion para averiguar el documento del conductor
			//VARIABLES
			
			$resultado = null;
			//CONECTION DATA BASE
			$modelo = new conexion();
			$conexion = $modelo -> post_conexion();
			//QUERY SQL
			$sql = "SELECT * FROM driver WHERE document=:document";
			//PDO
			$result = $conexion -> prepare($sql);
			$result->bindParam(':document',$document);
			$result -> execute();

			while ($f=$result->fetch()) {
				$resultado[]=$f;
			}
			return $resultado;
		}//cierra consulta documento

		public function deleteDriver($document){
            //CONECTION DATA BASE
            $modelo=new conexion();
            $conexion=$modelo->post_conexion();
            //QUERY SQL
            $sql="DELETE FROM driver WHERE document=:document";

            // PDO
            $result = $conexion->prepare($sql);
            $result->bindParam(":document",$document);

            //QUERY RESULT
            if (!$result){
				modalAlert('Error al eliminar','../../../view/drivers/drivers.php','error',3);
			}else {
				$result->execute();
				modalAlert('Conductor eliminado exitosamente','../../../view/drivers/drivers.php','success',3);
			}

        }

	}//Cierre clase consultas
?>