<?php 
session_start();
include "Koneksi.php";
 ?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="" method="post">
		<input type="text" name="user" placeholder="nama"/>
		 <input type="password" name="pass" placeholder="password"/>
		<input type="submit" name="login" value="Login"/>
	</form>

		<?php 
			if (isset($_POST['login'])) {
				$user = $_POST['user'];
				$pass = $_POST['pass'];
				$data = mysqli_query($con, "SELECT * FROM users WHERE first_name='$user' AND last_name='$pass'");
				$r = mysqli_fetch_array($data);
				$first_name = $r['first_name'];
				$last_name = $r['last_name'];
				$level = $r['level'];
				
				if ($user == $first_name && $pass == $last_name) {
					$_SESSION['level'] = $level;
					header('location:index.php');
				} else{
					echo 'salah coi';
				}
			}
		 ?>
</body>
</html>