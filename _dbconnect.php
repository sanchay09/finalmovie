<?php
$servername = "db-1";
//$servername = "172.17.0.2"; // Replace with the actual IP address
$username = "php_docker";
$password = "1234";
$dbname = "ticketflickdb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

echo "Connected successfully";
// Now you can perform database operations using $conn

// Don't forget to close the connection when you're done
$conn->close();
?>
