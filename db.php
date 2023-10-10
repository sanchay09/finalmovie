<?php
$dbHost = "try-main-db-1";
$dbUser = "php_docker";
$dbPassword = "1234";
$dbName = "ticketflickdb";

// Create connection
$con = mysqli_connect($dbHost, $dbUser, $dbPassword, $dbName);

// Check connection
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}

echo "Connected successfully";
// Now you can perform database operations using $conn

// Don't forget to close the connection when you're done
$con->close();
?>
