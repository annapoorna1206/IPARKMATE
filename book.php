<?php
	$Entrydate = $_POST['Entrydate'];
	$Exitdate = $_POST['Exitdate'];
	$Entrytime = $_POST['Entrytime'];
	$Exittime = $_POST['Exittime'];

	// Database connection
	$con = new mysqli("localhost", "root", "Annu@263", "hey");
    if ($con->connect_error) {
        die("Failed to connect: " . $con->connect_error);
    } else {
		$stmt = $conn->prepare("insert into book(Entrytime,Exittime,Entrytime,Exittime) values(?,?,?,?)");
		$stmt->bind_param("ssssi",$Entrytime,$Exittime,$Entrytime,$Exittime);
		$stmt->execute();
		echo "Submission successfully...";
		$stmt->close();
		$conn->close();
	}
?>