<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
//panggil koneksi
include "Koneksi.php";
$nm				=	$_POST['nm'];
$orang			=	$_POST['orang'];
$tgl			=	$_POST['tgl'];
$jam		=   $_POST['jam'];



if (!empty($nm) && !empty($orang) && !empty($tgl) && !empty($jam))

{
	mysqli_query($con, "INSERT INTO meja(nm,orang,tgl,jam)
	Values('$nm','$orang','$tgl','$jam')");
	header ('location:indexuser.php');
	
}
else
{
	header('location:indexuser.php');
}
?>
</body>
</html>