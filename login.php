<?php
if (!isset($_SESSION))
{
session_start();
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<title></title>
</head>
<body>
	<?php
	if(isset($_SESSION["id"])){
		header("refresh: 1; url =index.php");
		die();
	}
	?>
	<h1><center>Pee Saderd Board</center></h1><hr>
	<div class="container">
		<div class="row">
			<div class="col-md-11">
	<nav class="navbar navbar-default">
	  <div class="container-fluid">
	    <ul class="nav navbar-nav">
	      <li><a href="index.php"><span class="glyphicon glyphicon-home"></span>&nbsp;Home</a></li>
	    </ul>
	    <ul class="nav navbar-nav navbar-right">
			<?php
			if (isset($_SESSION['id']) && $_SESSION['role'] == "a") {
				echo "<li class='dropdown' style='cursor: pointer';>
								<a class='dropdown-toggle' data-toggle='dropdown'>".
										"<span class='glyphicon glyphicon-star'></span>".$_SESSION['username']."<span class='caret'></span>
								</a>
								<ul class='dropdown-menu'>
										<li><a href=logout.php><span class='glyphicon glyphicon-off'></span>&nbsp;&nbsp;ออกจากระบบ</a></li>
								</ul>
							</li>";
			 }
			 elseif (isset($_SESSION['id']) && $_SESSION['role'] == "m") {
				echo "<li class='dropdown' style='cursor: pointer';>
								<a class='dropdown-toggle' data-toggle='dropdown'>".
										"<span class='glyphicon glyphicon-user'></span>".$_SESSION['username']."<span class='caret'></span>
								</a>
								<ul class='dropdown-menu'>
										<li><a href=logout.php><span class='glyphicon glyphicon-off'></span>&nbsp;&nbsp;ออกจากระบบ</a></li>
								</ul>
							</li>";
			 }
			 else {
					echo "<li><a href=login.php>"."<span class='glyphicon glyphicon-log-in'></span>"."&nbsp;เข้าสู่ระบบ"."</a></li>";
				}
		 ?>
	    </ul>
	  </div>
	</nav>
<?php
if(isset($_SESSION["login"])){
	echo  "<div class='col-md-12'>"."<div class='modal-dialog '><div class='modal-content panel-danger'>
		<div class='panel-heading'><center>ชื่อบัญชีหรือรหัสผ่านไม่ถูกต้อง</div>
	</div></div></div>";
	unset($_SESSION["login"]);
}
?>
<div class="col-md-12">
	<div class="modal-dialog">
	        <div class="modal-content">
	                   <div class="panel-heading">
	                   <h3 class="panel-title">เข้าสู่ระบบ</h3>
	                    </div>
	                    <div class="panel-body">
	                        <form action="verify.php" method="post">
	                                <div class="form-group">
																		Login:
	                                    <input class="form-control" name="id">
	                                </div>
	                                <div class="form-group">
																		Password:
	                                    <input class="form-control" name="pass" type="password">
	                                </div>
	                                <button type="submit" class="btn btn-success ">Log in</button>
	                        </form>
	                </div>
	          </div>
	    </div>
</div>

</div>
</div>
</div>
<p><center>ถ้ายังไม่ได้เป็นสมาชิก <a href="register.php">กรุณาสมัครสมาชิก</a></center></p>
</body>
</html>
