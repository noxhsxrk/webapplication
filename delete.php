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
	if(isset($_SESSION['id'])&&$_SESSION["role"] == "a"){
		echo "ลบกระทู้ หมายเลข".$_GET["id"];
		header("refresh: 2; url =index.php");
	}
	else{
		header("refresh: 1; url =index.php");
	}
	?>
</body>
</html>