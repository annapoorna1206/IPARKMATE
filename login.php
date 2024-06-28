<?php
    $Email = $_POST['Email'];
    $Password = $_POST['Password'];
    $con = new mysqli("localhost", "root", "Annu@263", "hey");
    if ($con->connect_error) {
        die("Failed to connect: " . $con->connect_error);
    } else {
        $stmt = $con->prepare("SELECT * FROM login WHERE email=?");
        $stmt->bind_param("s", $Email);
        $stmt->execute();
        $stmt_result = $stmt->get_result();
        if ($stmt_result->num_rows > 0) {
            $data = $stmt_result->fetch_assoc();
            if (password_verify($Password, $data['Password'])) {
                echo "<h2>Login successfully</h2>";
            } else {
                echo "<h2>Invalid Email or Password</h2>";
            }
        } else {
            echo "<h2>Invalid Email or Password</h2>";
        }
    }
?>

