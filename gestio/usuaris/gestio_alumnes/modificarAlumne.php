<?php
$base ="../../../";
include $base.'includes/session.h';
include $base.'includes/connect.h';
?>
<!DOCTYPE html>
<html>
<head>
  
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width">

  <link href='http://fonts.googleapis.com/css?family=Julius+Sans+One' rel='stylesheet' type='text/css'>
  <link href="<? echo $base; ?>assets/css/bootstrap.min.css" rel="stylesheet">
  <link href="<? echo $base; ?>assets/css/bootstrap.css" rel="stylesheet">
  <link href="<? echo $base; ?>assets/css/navmenu-push.css" rel="stylesheet">
  <title>Gestió grups</title>

</head>

<?php

$sql="SELECT usuari_id,usuari_nom,usuari_cognom,username,correu FROM usuaris WHERE usuari_id=";
$sql=$sql.$_POST['modificar'];
//$query="SELECT usuari_id,usuari_nom,usuari_cognom,username,tipususuari_rol_id,correu FROM usuaris WHERE username="."'".$_POST['username']; $query=$query."'";
//$sql="SELECT usuari_id,usuari_nom,usuari_cognom,username,tipususuari_rol_id,correu FROM usuaris WHERE usuari_id="."'".$_POST['modificar']; $sql=$sql."'";
//$sql="SELECT usuari_id,usuari_nom,usuari_cognom,username,tipususuari_rol_id,correu FROM usuaris WHERE usuari_id=";$sql=$sql.$_POST['modificar'];
//echo $sql;

$resultado = mysqli_query($mysqli,$sql);

$row=mysqli_fetch_assoc($resultado);


?>
<body>

<div class="row">
<div class="col-md-5 col-md-offset-1 panel-group"> 
<form action ="modificarFinal.php" method="POST">


		Nom Alumne: <br>
		<input type ="text" name="1" value=<?php echo $row ['usuari_nom'];?>>
		<br>
		<br>
		
		Cognom Alumne: <br>
		<input type ="text" name="2" value=<?php echo $row ['usuari_cognom'];?>>
		<br>
		<br>
		Username: <br>
		<input type ="text" name="3" value=<?php echo $row ['username'];?>>
		<br>
		<br>
		Correu : <br>
		<input type ="text" name="4" value=<?php echo $row ['correu'];?>>
		<br>
<br>
		<input type="hidden" name="5" value=<?php echo $row ['usuari_id'];?>>
		
		<input type ="submit" value="Aceptar" button class="btn btn-success">
		
		
		
<form action ="../gestioUsuaris.php" method="POST" >
&nbsp;
&nbsp;
<input type ="submit" value="Tornar" button class="btn btn-warning">

		</div>
		</div>
		
<?php
if ($_SESSION['rol']==3){
	include $base.'includes/sideBeta.h';
}elseif ($_SESSION['rol']==2){
	include $base.'includes/sideProfessor.h';
}elseif ($_SESSION['rol']==4){
	include $base.'includes/sideBeta.h';
}
?>

<script src="<?php echo $base; ?>assets/offcanvas/jquery-1.10.2.min.js"></script>
<script src="<?php echo $base; ?>assets/offcanvas/bootstrap.min.js"></script>
<script src="<?php echo $base; ?>assets/offcanvas/jasny-bootstrap.min.js"></script>
<script src="<?php echo $base; ?>assets/js/custom.js"></script>
</body>
</html>		
		
		
		
		
		