<?php
	$mysqli = mysqli_connect("localhost", "sdaw2", "alumne_joviat", "projectxray2");
	mysqli_set_charset($mysqli, "utf8");
	if (mysqli_connect_errno()){
	die ('Consulta invalida:error de conexió' . mysqli_connect_error());
}
?>
