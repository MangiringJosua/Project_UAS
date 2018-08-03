<?php
//including the database connection file
include("Koneksi.php");

//getting id of the data from url
$id_saran = $_GET['id_saran'];

//deleting the row from table
$result = mysqli_query($con, "DELETE FROM saran WHERE id_saran=$id_saran");

//redirecting to the display page (index.php in our case)
header("Location:indexadmin.php");
?>

