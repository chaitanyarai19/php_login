<?php
$servername = "localhost"; // or your Azure MySQL host
$username = "root";        // your MySQL username
$password = "";            // your MySQL password
$dbname = "";      // your DB name

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>
