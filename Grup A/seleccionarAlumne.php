<?php 
include 'connect.h';
?>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<script src="js/jquery.js"></script>
		<script src="js/bootstrap.min.js"></script>	
	</head>
	<body>
		<form action='alumneExamen.php' class="form-signin" method="POST">
			<?php
				mysqli_query ($mysqli,"SET NAMES 'utf8'");
				$sql="SELECT * FROM usuaris WHERE tipususuari_rol_id=3";
				//echo $sql;
				$result = mysqli_query($mysqli, $sql);
				if (!$result) {
					die('Consulta no válida: ' . mysql_error());
				}
				echo "<select class='form-control'name='Alumnes'>";
					while ($row = mysqli_fetch_assoc($result)) {
						echo "<option value=".$row['usuari_id'].">".$row['usuari_nom'].' '.$row['usuari_cognom']."</option>";
					}
				echo "</select>";

				mysqli_query ($mysqli,"SET NAMES 'utf8'");
				$sql2="SELECT * FROM preguntes p, llico l WHERE p.llico_llico_id = l.llico_id AND l.tipusllico_id = 4;";
				//echo $sql2;
				$result2 = mysqli_query($mysqli, $sql2);
				if (!$result2) {
					die('Consulta no válida: ' . mysql_error());
				}
				echo "<select class='form-control' name='Preguntes'>";
					while ($row = mysqli_fetch_assoc($result2)) {
						echo "<option name='s1' value=".$row['preguntes_id'].'|'.$row['xray_codi'].">".$row['anunciat']."</option>";
					}
				echo "</select>";	
			?>
			<button class="btn btn-md btn-primary btn-block" type="submit" name="alumneExamen">Seleccionar
			</button>  
		</form>
	</body>
</html>