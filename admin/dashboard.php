<?php
session_start();
require '../config.php';

if (!isset($_SESSION['login_user'])) {
    header("Location: ../login.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
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
    </style>
</head>
<body>
    <h1>Admin Dashboard</h1>
    <ul>
        <li><a href="list_admin.php">Manage Admin Users</a></li>
        <li><a href="list_blog.php">Manage Blog Posts</a></li>
        <li><a href="inbox.php">View Contact Messages</a></li>
        <li><a href="../index.php">View Sites</a></li>
    </ul>
</body>
</html>
