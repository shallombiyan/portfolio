<?php
$servername = "localhost";
$username = "root";
$password = "12345678";
$dbname = "webprofil";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
?>
