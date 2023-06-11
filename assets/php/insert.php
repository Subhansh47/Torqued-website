<!DOCTYPE html>
<html>

<head>
	<title>Insert Page page</title>
</head>

<body>
		<?php

		$conn = mysqli_connect("localhost", "root", "", "torqued");
		
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		
	
		$email = $_REQUEST['email'];
        
		
		$sql = "INSERT INTO email VALUES ('$email')";
		
		if(mysqli_query($conn, $sql)){
			echo "<h3>data stored in a database successfully </h3>";

			echo nl2br("\n $email");
		} else{
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn);
		}
		
		// Close connection
		mysqli_close($conn);
		?>
	<!-- </center/> -->
</body>

</html>
