<?php
session_start();
require '../config.php';

if (!isset($_SESSION['login_user'])) {
    header("location: ../login.php");
}

$id = $_GET['id'];
$sql = "SELECT * FROM admin WHERE id=$id";
$result = $conn->query($sql);
$row = $result->fetch_assoc();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = md5($_POST['password']);
    $email = $_POST['email'];
    $nama_lengkap = $_POST['nama_lengkap'];

    $sql = "UPDATE admin SET username='$username', password='$password', email='$email', nama_lengkap='$nama_lengkap' WHERE id=$id";
    if ($conn->query($sql) === TRUE) {
        echo "Admin berhasil diperbarui.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Admin</title>
    <style>
                * {
            font-family: 'Courier New', Courier, monospace;
        }
        body {
            background-color: #0d1117;
            color: #c9d1d9;
        }
        h2 {
            color: #ffeb3b;
        }
        form {
            background-color: #0d1117;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        label {
            color: #c9d1d9;
        }
        input[type="text"],
        input[type="password"],
        input[type="email"] {
            border: 1px solid #21262d;
            background-color: #161b22;
            color: #c9d1d9;
        }
        input[type="submit"],
        input[type="button"] {
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
    <h2>Edit Admin</h2>
    <form action="" method="post">
        <label>Username:</label><br>
        <input type="text" name="username" value="<?php echo $row['username']; ?>" required><br>
        <label>Password:</label><br>
        <input type="password" name="password" required><br>
        <label>Email:</label><br>
        <input type="email" name="email" value="<?php echo $row['email']; ?>" required><br>
        <label>Nama Lengkap:</label><br>
        <input type="text" name="nama_lengkap" value="<?php echo $row['nama_lengkap']; ?>" required><br><br>
        <input type="submit" value="Update">
    </form>
</body>
</html>
