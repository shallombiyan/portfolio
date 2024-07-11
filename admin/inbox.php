<?php
session_start();
require '../config.php';

if (!isset($_SESSION['login_user'])) {
    header("Location: ../login.php");
    exit;
}

$sql_contact = "SELECT * FROM kontak";
$result_contact = $conn->query($sql_contact);
if (!$result_contact) {
    die("Query failed: " . $conn->error);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Inbox Kontak</title>
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
    <h2>Inbox Kontak</h2>
    <table border="1">
        <tr>
            <th>Nama</th>
            <th>Email</th>
            <th>Pesan</th>
            <th>Aksi</th>
        </tr>
        <?php
        if ($result_contact->num_rows > 0) {
            while ($row = $result_contact->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row['nama'] . "</td>";
                echo "<td>" . $row['email'] . "</td>";
                echo "<td>" . $row['message'] . "</td>";
                echo "<td><a href='delete_kontak.php?id=" . $row['idpesan'] . "'>Hapus</a></td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='4'>Tidak ada pesan</td></tr>";
        }
        ?>
    </table>
    <input type="button" value="Kembali" onclick="window.location.href='dashboard.php';">
</body>
</html>
