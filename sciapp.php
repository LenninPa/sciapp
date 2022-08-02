<!DOCTYPE html >
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Panel de Administracion</title>
	<meta name="viewport" content="width=device-width, user-scalable=no,initial-scale=1.0, minimun-scale=1,maximun-scale=1.0">
	<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@1,900&family=Plus+Jakarta+Sans:wght@200&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="css/main.css">
	<style type="text/css">
		body{
			background: none;
		}
	</style>
</head>
<body>
<?php 
	include 'php/top_bar.php'
?>	
<?php 
	include 'php/footer.php';
?>

<?php 
	session_start();
	error_reporting(0);
	$sessvar = $_SESSION['username'];

	if ($sessvar == null || $sessvar == '') {
?>
	<p class="error">La sesion ha sido cerrada, por favor vuevle a
		<a href="index.php" class="error_link">Iniciar sesion</a>
	</p>
<?php		
		die();

	}
 ?>





 	<div class="user_bar_state">
 		<p class="user_bar_state_Desc"> <?php echo date('m-d-Y h:i:s a', time()); ?></p>
 		<p class="user_bar_state_Desc">Usuario/a <strong style="font-size:1.2em;"><?php 	echo $_SESSION['username'];  ?></strong></p>
 		<a href="php/logout.php" class="user_bar_state_bttn_logout">Cerrar Sesion</a>
 	</div>





</body>
</html>