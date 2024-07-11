<?php
$servername = "localhost";
$username = "root";
$password = "12345678";
$dbname = "webprofil";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$nama = $_POST['nama'];
$email = $_POST['email'];
$message = $_POST['message'];


$sql = "INSERT INTO kontak (nama, email, message) VALUES ('$nama', '$email', '$message')";

if ($conn->query($sql) === TRUE) {
    echo "Data Berhasil Ditambahkan!";
} else {
        echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>
