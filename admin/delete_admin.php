<?php
session_start();
require '../config.php';

if (!isset($_SESSION['login_user'])) {
    header("location: ../login.php");
}

$id = $_GET['id'];
$sql = "DELETE FROM admin WHERE id=$id";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hapus Admin</title>
    <style>
        * {
            font-family: 'Courier New', Courier, monospace;
        }
        body {
            background-color: #0d1117;
            color: #c9d1d9;

        }
        input[type="submit"],
        input[type="button"] {
            margin-top: 20px;
            background-color: #ffeb3b;
            color: #0d1117;
        }
        input[type="submit"]:hover,
        input[type="button"]:hover {
            background-color: #ffd700;
        }
    </style>
</head>
<body>
    <div class="message">
        <?php
        if ($conn->query($sql) === TRUE) {
            echo "Admin berhasil dihapus.";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
        ?>
        <br>
        <input type="button" value="Kembali" onclick="window.location.href='dashboard.php';">
    </div>
</body>
</html>
