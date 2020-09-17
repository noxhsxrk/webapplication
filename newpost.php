<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<style>

    label textarea{
        vertical-align: middle;
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
		if(!isset($_SESSION['id'])){
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
	</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-md-3"></div>
			<div class="col-md-6">
			<div class="panel-group">
		        <div class="panel panel-info">
		                   <div class="panel-heading">
		                   <h3 class="panel-title">ตั้งกระทู้ใหม่</h3>
		                    </div>
		                    <div class="panel-body">
		                        <form action="newpost_save.php" method="post">
		                                <div class="form-group">
												<label class="col-sm-3 control-label" for='title'>หมวดหมู่:</label>
												<div class="col-md-9">
													<select name="category" class='form-control' id='category'>
														<option>เรื่องทั่วไป</option>
														<option>เรื่องเรียน</option>
													</select>
														<br>
												</div>
		                                </div>
		                                <div class="form-group">
												<label class="col-md-3 control-label">หัวข้อ:</label>
												<div class="col-md-9">
												<input class="form-control" name="title" type="password" required>
													<br>
												</div>
		                                </div>
		                                <div class="form-group">
												<label class="col-md-3 control-label">เนื้อหา:</label>
												<div class="col-md-9">
												<textarea class="form-control" style="resize: none" id="text" name="content" rows="10" cols="50" ></textarea>
													<br>
												</div>
		                                <label class="col-md-3 control-label"></label>
		                                <div class="col-md-9">
		                                <button type="submit" class="btn btn-info "><span class="glyphicon glyphicon-send"></span>  บันทกข้อความ</button>
		                            </div>
		                        </form>
		                </div>
		          </div>
		    </div>
	</div>
	</div>
	</div>
	<p><center><a href="index.php">กลับไปหน้าหลัก</a></center></p>
</body>
</html>
