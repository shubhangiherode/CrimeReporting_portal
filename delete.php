<?php 

$server= "localhost";
$username= "root";
$password= "";
$dbname= "test";
	
$conn = mysqli_connect($server, $username, $password, $dbname);

	if($conn){
	?>
		<script>
			alert('COMPLAINT RESOLVED- record deleted successfully !!!');
		</script>
	<?php
	}
	else{
		die("No Connection".mysqli_connect_error());
	}
	
	$Id= $_GET['id'];
	$deletequery= "DELETE FROM `crime_reports` WHERE `crime_reports`.`id` = $Id";
	$query = mysqli_query($conn, $deletequery);
	
	header('location:displayData.php');
	
?>
