<!DOCTYPE html>
<html lang="en">
<head>
	<title>My Music</title>
	<link rel="stylesheet" href="h1.css" />
</head>

<body>

<div id="coverMusic">
	
<?php

	$host = "localhost";
	$user = "root";
	$pass = "root";
	$database = "music";
	
	$conn = new mysqli($host, $user, $pass, $database);
	
	if ($conn->connect_error) 
		die ("Unable to connect to database: " . $conn->connect_error );
       
       
	$sql = "select * from Songs";
	$result = $conn->query($sql);
	
	if ($result->num_rows > 0) {
    		echo "<table border = 1><tr><th>Song Name</th><th>Artist</th><th>Album</th><th>Year</th></tr>";
	    	while($row = $result->fetch_assoc()) {
        		echo "<center><tr><td>".$row["Song_Name"]."</td><td>".$row["Artist"]."</td><td>".$row["Album_name"]."</td><td>".$row["Year"]."</td></center>";
    		}

    		echo "</table>";
	} 	
	else {
    		echo "You have no Songs";
	}
	$conn->close();	
?>

<br><br><br><br><br><br>
<a href= "hw3.html"> HOME</a>
</div>

</body>
</html>
