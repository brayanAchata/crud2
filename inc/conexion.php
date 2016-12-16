<html>
	<head>
	</head>
	<body>
		<?
			$conexion = new mysqli("mysql.hostinger.es","u528603932_braya","brayan01",'u528603932_braya');
			if($conexion->conect_errno){
				echo "Error al connectar a la BBDD".
					$conexion->connect_errno.",".
					$conexion->connect_error;
				exit();
			}else{
				$conexion->set_charset("utf8");
			}
		?>
	</body>
</html>