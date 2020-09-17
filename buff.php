#newpost.php
<select name"category" class ='form-control' id='category'>
  <?php
    $conn = new PDO("mysql:host=localhost;dbname=webboard;charset=uft8","root","");
    $sql = "SELECT * FROM catagory";

    foreach($conn->query($sql) as $row){
      echo "<option value=".$row['id'].">".$row['name']."</option>";
    }
    $conn = null;
    ?>
<select>
======================================================================================

#verify.php
<?php seesion_start();
  if(isset($_SESSION['username']) && $_SESSION['id'] == session_id()){
    header("location: index.php");
    die();
  }
  $u = $_POST['login'];
  $p = $_POST['pwd'];

    $conn = new PDO("mysql:host=localhost;dbname=webboard;charset=uft8","root","");
    $sql = "SELECT * FROM user where login='$u' and password = sha('$p')";
    if($result -> rowCount() == 1){
      $data = $result->Fetch(PDO::FETCH_ASSOC);
      $_SESSION['username'] = $data['login'];
      $_SESSION['role'] = $data['role'];
      $_SESSION['user_id'] = $data['id'];
      $_SESSION['id'] = session_id();
      header("location: index.php");
      die();
    }
    else{
      $_SESSION['error'] = 1;
      header("location: login.php");
      die();
    }
    ?>
======================================================================================
