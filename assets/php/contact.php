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
		$email = $_REQUEST['email'];
		$subject = $_REQUEST['subject'];
		$message = $_REQUEST['message'];

		$sql = "INSERT INTO contactus VALUES ('$first_name',
			'$email','$subject','$message')";
		
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
