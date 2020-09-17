<?php
if (!isset($_SESSION))
  {
    session_start();
  }
	if (isset($_SESSION["id"])) {
		header("refresh: 1; url =index.php");
		die();
	}
?>
<head>
	<meta charset="utf-8">
</head>
<body>
	<?php
		if(!isset($_POST['id'])){
			$_POST['id']=null;
			header("refresh: 0; url =index.php");
			die();
		}
		if($_POST["id"] == "admin" && $_POST["pass"] == "ad1234"){
			header("refresh: 0; url =index.php");
			$_SESSION["username"] = "admin";
			$_SESSION["role"] = "a";
			$_SESSION["id"] = session_id();

		}
		elseif ($_POST["id"] == "member" && $_POST["pass"] == "mem1234") {
			header("refresh: 0; url =index.php");
			$_SESSION["username"] = "member";
			$_SESSION["role"] = "m";
			$_SESSION["id"] = session_id();
		}
		else{
			header("refresh: 0; url =login.php");
			$_SESSION["login"] = "false";
			die();
		}
	?>
</body>
