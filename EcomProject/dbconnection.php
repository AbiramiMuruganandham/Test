<?php
$servername = "localhost";
$username = "root";
$password = "";
$DATABASE_NAME = 'ecommerce';


$conn = new mysqli($servername, $username, $password, $DATABASE_NAME);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>