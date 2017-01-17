<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "seatplan";
// Create connection
$conn = new mysqli($servername, $username, $password, $database);
// Check connection
if ($conn->connect_error) {
    echo $conn->connect_error;
}
?>