<?php
session_start();
require '../config.php';

if (!isset($_SESSION['login_user'])) {
    header("Location: ../login.php");
    exit;
}

$sql_admin = "SELECT * FROM admin";
$result_admin = $conn->query($sql_admin);
if (!$result_admin) {
    die("Query failed: " . $conn->error);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Admin Users</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Courier New', Courier, monospace;
        }
        body {
            background-color: #0d1117;
            color: #c9d1d9;
            line-height: 1.6;
            padding: 20px;
        }
        a {
            color: #ffeb3b;
            text-decoration: none;
        }
        a:hover {
            text-decoration: underline;
        }
        table {
            width: 80%;
            border-collapse: collapse;
            margin-top: 20px;
            margin-bottom: 50px;
        }
        table, th, td {
            border: 1px solid #21262d;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #161b22;
            color: #c9d1d9;
        }
        tr:hover {
            background-color: #161b22;
        }
        .blog-table {
            width: 80%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        .blog-table th, .blog-table td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }
        .blog-table img {
            max-width: 100px;
            height: auto;
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
    <h2>Admin Users</h2>
    <a href="add_admin.php">Add New User</a><br/><br/>
    <table>
        <tr>
            <th>Username</th> <th>Email</th> <th>Nama Lengkap</th> <th>Update</th>
        </tr>

        <?php  
        if ($result_admin->num_rows > 0) {
            while ($user_data = $result_admin->fetch_assoc()) {         
                echo "<tr>";
                echo "<td>" . $user_data['username'] . "</td>";
                echo "<td>" . $user_data['email'] . "</td>";
                echo "<td>" . $user_data['nama_lengkap'] . "</td>";    
                echo "<td><a href='edit_admin.php?id=" . $user_data['id'] . "'>Edit</a> | <a href='delete_admin.php?id=" . $user_data['id'] . "'>Delete</a></td>";
                echo "</tr>";        
            }
        } else {
            echo "<tr><td colspan='4'>User Tidak Ditemukan</td></tr>";
        }
        ?>
    </table>
</body>
</html>
