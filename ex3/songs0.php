<!DOCTYPE html>
<html lang="en">
<head>
	<title>My Tunes</title>
</head>

<body>
<h1>My tunes</h1>

<?php

	$host = "localhost";
	$user = "root";
	$pass = "root";
	$database = "tunes";
	
	$conn = new mysqli($host, $user, $pass, $database);
	
	if ($conn->connect_error) 
		die ("Unable to connect to database: " . $conn->connect_error );

	$sql = "select * from songs";
	$result = $conn->query($sql);
	
	if ($result->num_rows > 0) {
    		echo "<table><tr><th>Song</th><th>Artist</th><th>Album</th></tr>";
	    	while($row = $result->fetch_assoc()) {
        		echo "<tr><td>".$row["song"]."</td><td>".$row["artist"]."</td><td>".$row["album"]."</td></tr>";
    		}
    		echo "</table>";
	} 	
	else {
    		echo "You have no songs";
	}
	$conn->close();	
?>

</body>
</html>
