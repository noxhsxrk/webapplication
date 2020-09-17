<?php 
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<?php 
		unset($_SESSION["id"]);
		unset($_SESSION["role"]);
		unset($_SESSION["username"]);

		if (!isset($_SESSION['id'])) {
			header("refresh: 0; url =index.php");
		}
	 ?>

</body>
</html>