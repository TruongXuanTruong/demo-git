<?php

//Kết nối database
$conn = mysql_connect('localhost', 'root', '', 'xuantruong');
if (!$conn){
    echo "Kết nối không thành công." . mysqli_connect_error();
    die();
}
$servername = "localhost";
$username = "username";
$password = "password";

// Create connection
$conn = new mysqli($servername, $username, $password);
// Check connection
if ($conn->connect_error) {
    die("Kết Nối Thất Bại: " . $conn->connect_error);
}

// Create database
$sql = "CREATE DATABASE myDB";
if ($conn->query($sql) === TRUE) {
    echo "CSDL Được Tạo Thành Công";
} else {
    echo "CSDL Kết Nối Không Thành Công: " . $conn->error;
}

$conn->close();
?>
