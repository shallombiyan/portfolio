<?php
session_start();
require 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = md5($_POST['password']);

    $sql = "SELECT * FROM admin WHERE username='$username' AND password='$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $_SESSION['login_user'] = $username;
        header("location: admin/dashboard.php");
    } else {
        $error = "Username atau Password salah.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login Admin</title>
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
        }
        label {
            color: #c9d1d9;
        }
        input[type="text"],
        input[type="password"] {
            border: 1px solid #21262d;
            background-color: #161b22;
            color: #c9d1d9;
        }
        input[type="submit"] {
            background-color: #ffeb3b;
            color: #0d1117;
        }
        input[type="submit"]:hover {
            background-color: #ffd700;
        }
    </style>
</head>
<body>
    <h2>Login Admin</h2>
    <form action="" method="post">
        <label>Username:</label><br>
        <input type="text" name="username" required><br>
        <label>Password:</label><br>
        <input type="password" name="password" required><br><br>
        <input type="submit" value="Login">
    </form>
    <?php if(isset($error)) { echo $error; } ?>
</body>
</html>
