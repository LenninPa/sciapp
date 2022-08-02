<?php

	include 'conection.php';
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		session_start();
		$username = htmlentities($_POST['username']);
		$password = htmlentities($_POST['password']);

		$_SESSION['username'] = $username;


		$request = "SELECT * FROM datos WHERE usuario = '$username' AND contraseña = '$password' ";

		$resultado = mysqli_query($conexuser, $request);

		$check = mysqli_num_rows($resultado);

		if ($check > 0) {
			header("LOCATION:../sciapp.php");
		}
		
		else{	
			?>

			<p class="error">Error de autenticacion, por favor vuelve a 
			</p>			
			<a href="sciapp/index.php" class="error">Iniciar sesion</a>

			<?php
			die();
		}
		mysqli_free_result($resultado);
		mysqli_close($conexuser);

	}
?>
