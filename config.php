<?php
$host = 'localhost';
$dbname = 'metodesaw';
$username = 'root';
$password = 'DBku98*#';

$conn = new mysqli($host, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";
?>