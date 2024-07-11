<!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Admin</title>
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
    <h2>Tambah Admin</h2>
    <form action="" method="post">
        <label>Username: </label><br>
        <input type="text" name="username" required><br>
        <label>Password: </label><br>
        <input type="password" name="password" required><br>
        <label>Email: </label><br>
        <input type="email" name="email" required><br>
        <label>Nama Lengkap: </label><br>
        <input type="text" name="nama_lengkap" required><br><br>
        <input type="button" value="Kembali" onclick="window.location.href='dashboard.php';"><input type="submit" value="Tambah"> 
    </form>
 </body>
</html>

 <?php
session_start();
require '../config.php';

if(!isset($_SESSION['login_user'])) {
    header("location: ../login.php");
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = md5($_POST['password']);
    $email = $_POST['email'];
    $nama_lengkap = $_POST['nama_lengkap'];

    $sql = "INSERT INTO admin (username, password, email, nama_lengkap) VALUES ('$username', '$password', '$email', '$nama_lengkap')";
    if ($conn->query($sql) === TRUE) {
        echo "Admin berhasil ditambahkan.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>
