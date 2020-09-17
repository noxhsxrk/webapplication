<?php
	session_start();

?>
<!DOCTYPE html>
<html>
<head>
	<style >
		.modal-header {
    padding:9px 15px;
    border-bottom:1px solid #eee;
    background-color: #0480be;
    -webkit-border-top-left-radius: 5px;
    -webkit-border-top-right-radius: 5px;
    -moz-border-radius-topleft: 5px;
    -moz-border-radius-topright: 5px;
     border-top-left-radius: 5px;
     border-top-right-radius: 5px;
 }
	</style>
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
	<h1><center>สมัครสมาชิก</center></h1><hr>

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
</div>
</div>
<?php
				if(isset($_SESSION["email_false"])){
					echo  "<div class='col-md-12'>"."<div class='modal-dialog '><div class='modal-content panel-danger'>
							<div class='panel-heading'><center>ใส่ Email ไม่ถูกจ้าาาา</div>
							</div></div></div>";
					unset($_SESSION["email_false"]);
				}
			?>
<div class="container">
	<div class="row">
		<div class="col-md-3"></div>
		<div class="col-md-6">
		<div class="panel-group">
	        <div class="panel panel-primary">
	                   <div class="panel-heading">
	                   <h3 class="panel-title">สมัครสมาชิก</h3>
	                    </div>
	                    <div class="panel-body">
	                        <form action="register_save.php" method="post">
	                                <div class="form-group">
											<label class="col-md-3 control-label">บัญชี:</label>
											<div class="col-md-9">
												<input class="form-control" name="login" required>
											</div>
	                                </div>
	                                <div class="form-group">
											<label class="col-md-3 control-label">รหัสผ่าน:</label>
											<div class="col-md-9">
											<input class="form-control" name="pwd" type="password" required>
											</div>
	                                </div>
	                                <div class="form-group">
											<label class="col-md-3 control-label">ชื่อ-นามสกุล:</label>
											<div class="col-md-9">
											<input class="form-control" name="name" type="text" required>
											</div>
	                                </div>
	                                <div class="form-group">
										<label class="col-md-3 control-label">เพศ:</label>
										<div class="col-md-9">
	                                    <input name="gender" type="radio" id="m" required>
	                                    <label for="m">ชาย</label><br>
	                                    </div>
	                                    <label class="col-md-3 control-label"></label>
	                                    <div class="col-md-9">
	                                    <input  name="gender" type="radio" id="f" required>
	                                    <label for="f">หญิง</label><br>
	                                    </div>
	                                    <label class="col-md-3 control-label"></label>
	                                    <div class="col-md-9">
	                                    <input name="gender" type="radio" id="o" required>
	                                    <label for="o">อื่นๆ</label><br>
	                                    </div>
	                                </div>
	                                <div class="form-group">
										<label class="col-md-3 control-label">อีเมล:</label>
										<div class="col-md-9">
	                                    <input class="form-control" name="email" type="text" required>
	                                    </div>
	                                </div>
	                                <label class="col-md-3 control-label"></label>
	                                <div class="col-md-9">
	                                <button type="submit" class="btn btn-primary "><span class="glyphicon glyphicon-floppy-disk"></span>สมัครสมาชิก</button>
	                            </div>
	                        </form>
	                </div>
	          </div>
	    </div>
</div>
</div>
</div>
</body>
</html>
