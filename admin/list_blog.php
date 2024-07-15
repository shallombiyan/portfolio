<?php
session_start();
require '../config.php';

if (!isset($_SESSION['login_user'])) {
    header("Location: ../login.php");
    exit;
}

$sql_blog = "SELECT * FROM blog";
$result_blog = mysqli_query($conn, $sql_blog);
if (!$result_blog) {
    die("Query failed: " . mysqli_error($conn));
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>List Blog</title>
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
    <h2>List Blog</h2>
    <a href="add_blog.php">Add Blog</a>
    <table class="blog-table">
        <tr>
            <th>Title</th>
            <th>Content</th>
            <th>Thumbnail</th>
            <th>Actions</th>
        </tr>
        <?php while ($row = mysqli_fetch_assoc($result_blog)): ?>
        <tr>
            <td><?php echo $row['title']; ?></td>
            <td><?php echo $row['content']; ?></td>
            <td><img src="../uploads/<?php echo $row['thumbnail']; ?>" alt="Thumbnail"></td>
            <td>
                <a href="edit_blog.php?id=<?php echo $row['id']; ?>">Edit</a>
                <a href="delete_blog.php?id=<?php echo $row['id']; ?>">Delete</a>
            </td>
        </tr>
        <?php endwhile; ?>
    </table>
</body>
</html>
