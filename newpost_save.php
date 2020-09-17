<?php
	$cat_id = $_POST['category'];
	$title = $_POST['title'];
  $content = $_POST['content'];
  $user_id = $_SESSION['user_id'];
  #$post_date = NOW();

		$conn = new PDO("mysql:host=localhost;dbname=webboard;charset=utf8", "root","");

		$sql = "INSERT INTO post (title,content,post_date,cat_id,user_id) VALUES ('$title','$content','$post_date','$cat_id','$user_id')";

		$conn->exec($sql);
		$conn = null;
		header("refresh:0; url =index.php");
?>
