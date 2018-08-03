<?php
// including the database connection file
include_once("Koneksi.php");

if(isset($_POST['update']))
{	

	$id_saran = mysqli_real_escape_string($con, $_POST['id_saran']);
	
	$nama = mysqli_real_escape_string($con, $_POST['nama']);
	$email = mysqli_real_escape_string($con, $_POST['email']);
	$sarant = mysqli_real_escape_string($con, $_POST['sarant']);	
	
	// checking empty fields
	if(empty($nama) || empty($email) || empty($sarant)) {	
			
		if(empty($nama)) {
			echo "<font color='red'>Nama field is empty.</font><br/>";
		}
		
		if(empty($email)) {
			echo "<font color='red'>Email field is empty.</font><br/>";
		}
		
		if(empty($sarant)) {
			echo "<font color='red'>Saran field is empty.</font><br/>";
		}		
	} else {	
		//updating the table
		$result = mysqli_query($con, "UPDATE saran SET nama='$nama',email='$email',sarant='$sarant' WHERE id_saran=$id_saran");
		
		//redirectig to the display page. In our case, it is index.php
		header("Location: indexadmin.php");
	}
}
?>
<?php
//getting id from url
$id_saran = $_GET['id_saran'];

//selecting data associated with this particular id
$result = mysqli_query($con, "SELECT * FROM saran WHERE id_saran=$id_saran");

while($res = mysqli_fetch_array($result))
{
	$nama = $res['nama'];
	$email = $res['email'];
	$sarant = $res['sarant'];
}
?>
<html>
<head>	
	<title>Edit Data</title>
</head>

<body>
	<a href="indexadmin.php">Home</a>
	<br/><br/>
	
	<form name="form1" method="post" action="edit.php">
		<table border="0">
			<tr> 
				<td>Nama</td>
				<td><input type="text" name="nama" value="<?php echo $nama;?>"></td>
			</tr>
			<tr> 
				<td>Email</td>
				<td><input type="text" name="email" value="<?php echo $email;?>"></td>
			</tr>
			<tr> 
				<td>Saran</td>
				<td><input type="text" name="sarant" value="<?php echo $sarant;?>"></td>
			</tr>
			<tr>
				<td><input type="hidden" name="id_saran" value=<?php echo $_GET['id_saran'];?>></td>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
		</table>
	</form>
</body>
</html>
