<?php
	$FirstName = $_POST['FirstName'];
	$lastName = $_POST['LastName'];
	$Gender = $_POST['Gender'];
	$Category = $_POST['Category'];
	$Vehicletype = $_POST['Vehicletype'];
	$Vehiclenumber2wheeler = $_POST['Vehiclenumber2wheeler'];
    $Vehiclenumber4wheeler = $_POST['Vehiclenumber4wheeler'];
    $Phonenumber = $_POST['Phonenumber'];
    $Email = $_POST['Email'];
    $Password = $_POST['Passwordl'];
    $Confirmpassword= $_POST['Confirmpassword'];

	// Database connection
	$con = new mysqli("localhost", "root", "Annu@263", "hey");
    if ($con->connect_error) {
        die("Failed to connect: " . $con->connect_error);
    } else {
		$stmt = $conn->prepare("insert into sign(FirstName,LastName,Gender,Category,Vehicletype,Vehiclenumber2wheeler,Vehiclenumber4wheeler,Phonenumber,Email,Password,Confirmpassword) values(?,?,?,?,?,?,?,?,?,?,?)");
		$stmt->bind_param("sssssi",$FirstName,$LastName,$Gender,$Category,$Vehicletype,$Vehiclenumber2wheeler,$Vehiclenumber4wheeler,$Phonenumber,$Email,$Password,$Confirmpassword);
		$stmt->execute();
		echo "Registration successfully...";
		$stmt->close();
		$conn->close();
	}
?>