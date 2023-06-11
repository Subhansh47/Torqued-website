<!DOCTYPE html>
<html>

<head>
	<title>contact us data </title>
</head>

<body>
		<?php
		$conn = mysqli_connect("localhost", "root", "", "torqued");	
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		else echo" connected";
		$first_name = $_REQUEST['name'];
		$phone = $_REQUEST['phone'];
		$email = $_REQUEST['email'];
		$date = $_REQUEST['date'];
		$time = $_REQUEST['time'];
		$address = $_REQUEST['address'];
		$sql = "INSERT INTO test_drive VALUES ('$first_name','$phone','$email','$address','$date','$time')";
		if(mysqli_query($conn, $sql)){
			echo "<h3>data stored in a database successfully.";
		} else{
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn);
		}
		mysqli_close($conn);
		?>
</body>

</html>
