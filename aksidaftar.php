
<?php
//panggil koneksi
include "Koneksi.php";
$username			=	$_POST['username'];
$password			=	$_POST['password'];
$email				=   $_POST['email'];



if (!empty($username) && !empty($password) && !empty($email))

{
	mysqli_query($con, "INSERT INTO login(username,password,email)
	Values('$username','$password','$email')");
	header ('location:daftar.php');
	
}
else
{
	header('location:login.php');
}
?>
