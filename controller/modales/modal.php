<?php
	//funcion creada para modales 
	function modalAlert($mensaje,$url,$type,$sal)
	{	
		//Variables
		$var =null;
		$result=null;

		
		for ($i=1; $i <=$sal ; $i++) { 
			$result.='../';
		}
		//Links CSS and JS
		echo '<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10.6.1/dist/sweetalert2.min.css">  
		<link rel="shortcut icon" href="'.$result.'img/icon.png" type="image/x-icon">    
		<title>QR MONTECHELO</title>   
		<!-- Google Fonts -->
		<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="'.$result.'/css/modal.css"> 
		<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.6.1/dist/sweetalert2.all.min.js"></script>
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<style>
		/*MODAL*/
		.swal2-container.swal2-backdrop-show, .swal2-container.swal2-noanimation {
			background: #333 !important;
		}
		</style>';

		//Script with code for modal
		echo  "<script>
				$(document).ready(function(){
					Swal.fire({
						icon: '".$type."',
						title: '".$mensaje."',
					}).then((result) => {           	
						location.href='".$url."'
						document.forms['form'].submit()
					});
				});
			   </script>";
	}
?>