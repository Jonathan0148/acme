<?php  
	class consultas{
		public function showOwners(){//Funcion para consultar propietarios
			//Toma el resultado de la consulta
			$resultado = null;
			//CONECTION DATA BASE
			$modelo = new conexion();
			$conexion = $modelo->post_conexion();
			//QUERY SQL
			$sql = "SELECT * FROM owner"; 
			$result = $conexion->prepare($sql);
			//PDO
			$result->execute();

			//Cargar el resultado a la variable resultado
			while ($f = $result->fetch()) {
				$resultado[] = $f;
			}

			return $resultado;
		}//Cierre mirar propietarios

		//Funcion para añadir propietarios
		public function registerOwner($first_name, $second_name, $last_name, $document, $address, $phone, $city){
			//CONECTION DATA BASE
			$modelo = new conexion();
			$conexion = $modelo->post_conexion();
			//QUERY SQL
			$sql = "INSERT INTO owner(first_name, second_name, last_name, document, address, phone, city)
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
				modalAlert('Error al registrar','../.././view/owners/registerOwner.php','error',3);
			}else {		
				$result->execute();
				modalAlert('Conductor registrado','../../../view/owners/owners.php','success',3);
        	}
	  	}//Cierra insertar propietarios

	  	public function ownerInfo($id){//Funcion para ver la informacion del propietario
			//VARIABLES
			$resultado = null;
			//CONECTION DATA BASE
			$modelo = new conexion();
			$conexion = $modelo -> post_conexion();
			//QUERY SQL
			$sql = "SELECT * FROM owner WHERE document = :id";
			//PDO
			$result = $conexion -> prepare($sql);
			$result->bindParam(':id',$id);
			$result -> execute();

			while ($f=$result->fetch()) {
				$resultado[]=$f;
			}
			return $resultado;
		}//cierra informacion propietario

		public function updateOwner($first_name, $second_name, $last_name, $document, $address, $phone, $city){//funcion para actualizar los propietarios
			//CONECTION DATA BASE
			$modelo=new conexion();
			$conexion=$modelo->post_conexion();
			//QUERY SQL
			$sql="UPDATE owner SET first_name=:first_name, second_name=:second_name, last_name=:last_name, 
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
				modalAlert('Error al modificar' , '../../../view/owners/infoDriver.php' , 'warning' , '3');
			}else {	
				$result->execute();
				modalAlert('Actualización exitosa' , '../../../view/owners/owners.php' , 'success' , '3');
			}
		}//cierra actualizar propietarios

		public function consultDoc($document){//funcion para averiguar el documento del propietario
			//VARIABLES
			
			$resultado = null;
			//CONECTION DATA BASE
			$modelo = new conexion();
			$conexion = $modelo -> post_conexion();
			//QUERY SQL
			$sql = "SELECT * FROM owner WHERE document=:document";
			//PDO
			$result = $conexion -> prepare($sql);
			$result->bindParam(':document',$document);
			$result -> execute();

			while ($f=$result->fetch()) {
				$resultado[]=$f;
			}
			return $resultado;
		}//cierra consulta propietario

		public function deleteOwner($document){
            //CONECTION DATA BASE
            $modelo=new conexion();
            $conexion=$modelo->post_conexion();
            //QUERY SQL
            $sql="DELETE FROM owner WHERE document=:document";

            // PDO
            $result = $conexion->prepare($sql);
            $result->bindParam(":document",$document);

            //QUERY RESULT
            if (!$result){
				modalAlert('Error al eliminar','../../../view/owners/owners.php','error',3);
			}else {
				$result->execute();
				modalAlert('Propietario eliminado exitosamente','../../../view/owners/owners.php','success',3);
			}

        }

	}//Cierre clase consultas
?>