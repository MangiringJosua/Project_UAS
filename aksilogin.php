<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
session_start();
//panggil koneksi
include "Koneksi.php";
$user			=	$_POST['user'];
$pass    		=	$_POST['pass'];



if (!empty($usernamex) && !empty($passwordx))

{
	if($usernamex == "admin" && $passwordx == "admin")
	{
		$_SESSION['login_user']="admin";
		header ('location:indexadmin.php');
		
	}
	else{
		header ('location:Loginadmin.php');
	}
	
}
else
{
	header ('location:Loginadmin.php');
}
?>
</body>
</html>