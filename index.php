<?php
if (!isset($_SESSION))
  {
    session_start();
  }
?>
<html>
    <title>PeeSaderd</title>
<head>
  <style>

.navbar-nav > li > a, .navbar-brand {
    padding-top:15px !important; padding-bottom:0 !important;
    height: 30px;
}
.navbar {  min-height:50px !important;}
</style>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <title></title>
</head>
<body>
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
	 <div class="form-group">
      	<div class="col-sm-1 col-md-4">
	      	<label >หมวดหมู่:</label>
	        <select id="board" class="form-control">
	          	<option value="all">-- ทั้งหมด --</option>
	          	<option value="etc">ทั่วไป</option>
	          	<option value="learn">เรื่องเรียน</option>
	       	</select>
      	</div>
    </div>
	</form>
  <?php
  if (isset($_SESSION['id'])) {
	echo "<a href='newpost.php'><button class='btn btn-success pull-right'><span class='glyphicon glyphicon-plus'></span>สร้างกระทู้ใหม่</button></a>";
  }
?>
	 <table class="table table-striped">
	<form action="post.php" method="get">

		<?php
		if (isset($_SESSION['id']) && $_SESSION['role'] == "a") {
			echo "<tbody>";
			for($i=1;$i<=10;$i++){
				echo "<tr>"."<td>"."<a href = post.php?id=".$i.">"."กระทู้ที่ ".$i."</a>"."<td>"."&nbsp;&nbsp;&nbsp;&nbsp;"."<a href = delete.php?id=".$i.">"."<button type='button' class='btn btn-danger'><span class='glyphicon glyphicon-trash'></span></button>"."</td>"."</td>"."</tr>";
			}
			echo "</tbody>";
		}
		else{
			echo "<tbody>";
			for($i=1;$i<=10;$i++){
				echo "<tr>"."<td>"."<a href = post.php?id=".$i.">"."กระทู้ที่ ".$i."</a>"."</td>"."</tr>";
			}
			echo "</tbody>";
		}

		?>
</form>
</table>

</div>
</div>
</div>
</body>
</html>
