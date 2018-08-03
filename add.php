<html>
<head>
	<title>Add Data</title>
</head>

<body>
<?php
//including the database connection file
include_once("Koneksi.php");

if(isset($_POST['Submit'])) {	
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
		
		//link to the previous page
		echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
	} else { 
		// if all the fields are filled (not empty) 
			
		//insert data to database	
		$result = mysqli_query($con, "INSERT INTO saran(nama,email,sarant) VALUES('$nama','$email','$sarant')");
		
		//display success message
		echo "<font color='green'>Data added successfully.";
		echo "<br/><a href='indexadmin.php'>View Result</a>";
	}
}
?>
</body>
</html>
