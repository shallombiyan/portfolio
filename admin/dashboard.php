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
    <title>Admin Dashboard</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Courier New', Courier, monospace;
        }
        body {
            display: flex;
            background-color: #0d1117;
            color: #c9d1d9;
            line-height: 1.6;
            height: 100vh;
            overflow: hidden; /* to prevent scrollbars in iframe */
        }
        .sidebar {
            width: 250px;
            background-color: #161b22;
            padding: 20px;
            flex-shrink: 0;
        }
        .sidebar ul {
            list-style: none;
            padding: 0;
        }
        .sidebar li {
            margin: 20px 0;
        }
        .sidebar a {
            color: #ffeb3b;
            text-decoration: none;
            display: block;
            padding: 10px;
            border-radius: 5px;
        }
        .sidebar a:hover {
            background-color: #21262d;
        }
        .content {
            flex-grow: 1;
            padding: 20px;
            position: relative; /* Added for containing iframe */
        }
        .content iframe {
            width: 100%;
            height: calc(100vh - 40px); /* Adjusted height to fit within content area */
            border: none;
        }
        .hidden {
            display: none;
        }
        .profile-photo{
            margin-left: 40px;
            width: 120px;
            height: 120px;
            border-radius: 50%;
            object-fit: cover;
        }
    </style>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const links = document.querySelectorAll('.sidebar a');
            const iframe = document.querySelector('iframe[name="content_frame"]');
            const sidebar = document.querySelector('.sidebar');
            const viewSiteLink = document.querySelector('a[href="../index.php"]');

            links.forEach(link => {
                link.addEventListener('click', function(event) {
                    event.preventDefault();
                    const url = this.getAttribute('href');
                    if (url === '../index.php') {
                        sidebar.classList.add('hidden');
                        iframe.style.height = '100vh'; // Adjust iframe height to fill the screen
                    } else {
                        sidebar.classList.remove('hidden');
                        iframe.style.height = 'calc(100vh - 40px)'; // Restore iframe height
                    }
                    iframe.src = url;
                });
            });
        });
    </script>
</head>
<body>
    <div class="sidebar">
        <img src="../assets/mata.png" alt="Photo" class="profile-photo">
        <ul>
            <li><a href="list_admin.php" target="content_frame">Manage Admin Users</a></li>
            <li><a href="list_blog.php" target="content_frame">Manage Blog Posts</a></li>
            <li><a href="inbox.php" target="content_frame">View Contact Messages</a></li>
            <li><a href="../index.php" target="content_frame">View Site</a></li>
        </ul>
    </div>
    <div class="content">
        <iframe name="content_frame"></iframe>
    </div>
</body>
</html>
