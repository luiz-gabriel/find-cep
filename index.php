<?php 
/* Informa o nível dos erros que serão exibidos */
error_reporting(E_ALL);

/* Habilita a exibição de erros */
ini_set("display_errors", 1);

include ('App.php'); 
?>
<!DOCTYPE html>
<html>
<head>
	<title>FindCep</title>
	<meta charset="utf-8">
</head>
<body>
	<form method="POST">
		<input type="cep" name="cep">
		<button type="submit" name="action">Enviar</button>
	</form>
	
</body>
</html>



