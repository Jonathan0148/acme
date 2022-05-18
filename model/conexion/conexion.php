<?php 
	class conexion{
		public function post_conexion(){
			$host = "localhost";
			$db = "acme";
			$user = "root";
			$pass = "";

			$conexion = new PDO ("mysql:host=$host;dbname=$db;",$user,$pass);
			return $conexion;
		}
	}
?>