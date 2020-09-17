<!DOCTYPE html>
<html>
<head>

	<title></title>
</head>
<body>
	<h1><center>Webboard KakKak</center></h1><hr>
	<?php  echo "<center>"."ต้องการดูกระทู้หมายเลข ".$_GET["id"]."<br>"; 
		if($_GET["id"]%2 == 1){
			echo "<center>"."เป็นกระทู้หมายเลขคี่";
		}
		else{
			echo "<center>"."เป็นกระทู้หมายเลขคู่";
		}
	?>
	<table style="border: 2px solid black; width: 40%" align="center">
		<tr><td style="background-color: #6cd2fe" colspan="2"><div>แสดงความคิดเห็น</div></td></tr>
		<form>
			<tr><td align="center"><textarea id="area" name="area" rows="6" cols="70"></textarea></td></tr>
			
			<tr><td align="center"><input type="submit" value="ส่งข้อความ"></td></tr>
		</tr>
		</form>
	</table>
	<p><center><a href="index.php">กลับไปหน้าหลัก</a></center></p>
</body>
</html>