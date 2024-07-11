<?php
session_start();
require '../config.php';

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if (!isset($_SESSION['login_user'])) {
    header("Location: ../login.php");
    exit;
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Prepare the SQL delete statement
    $sql_delete = "DELETE FROM kontak WHERE idpesan = ?";
    
    if ($stmt = $conn->prepare($sql_delete)) {
        $stmt->bind_param("i", $id);

        if ($stmt->execute()) {
            // Redirect to inbox.php after deletion
            header("Location: inbox.php");
            exit;
        } else {
            echo "Error executing statement: " . $stmt->error;
        }

        $stmt->close();
    } else {
        echo "Error preparing statement: " . $conn->error;
    }
} else {
    echo "No ID specified.";
}

$conn->close();
?>
