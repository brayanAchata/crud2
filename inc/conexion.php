<html>
	<head>
	</head>
	<body>
		<?
			$conexion = new mysqli("mysql.hostinger.es","u528603932_u2226","root",'u528603932_u2226');
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