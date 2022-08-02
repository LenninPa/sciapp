<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, user-scalable=no,initial-scale=1.0, minimun-scale=1,maximun-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Ingreso</title>
	<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@1,900&family=Plus+Jakarta+Sans:wght@200&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="css/main.css">
</head>
<body>

	<div class="top_bar">
		<h1 class="top_bar_title">Sistema Control de Inventario</h1>
	</div>


	<div class="form">
		<form  method="post" class="main_form">
			<legend class="main_form_inputs">Ingresar</legend>
			<label class="main_form_inputs" for="user">Usuario</label>
			<input class="main_form_inputs" type="text" name="username">
			<label class="main_form_inputs" for="password">Contraseña</label>
			<input class="main_form_inputs" type="password" name="password">
			<input type="submit" class="main_form_inputs" value="Ingresar ">
		</form>
	</div>

<?php 
	include 'php/footer.php';
 ?>
<?php // Check user and password.....
	include 'php/conection.php';
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		session_start();
		$username = htmlentities($_POST['username']);
		$password = htmlentities($_POST['password']);

		$_SESSION['username'] = $username;


		$request = "SELECT * FROM datos WHERE usuario = '$username' AND contraseña = '$password' ";

		$resultado = mysqli_query($conexuser, $request);

		$check = mysqli_num_rows($resultado);

		if ($check > 0) {
			header("LOCATION:sciapp.php");
		}
		else{	
			?>

			<p class="error">Error: Usuario y/o contraseña invalido.
			</p>
			<?php
			die();
		}
		mysqli_free_result($resultado);
		mysqli_close($conexuser);
	}
?>




</body>
</html>
