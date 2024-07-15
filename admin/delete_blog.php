<?php
require '../config.php';

if(isset($_GET['id'])){
    $id = $_GET['id'];
    mysqli_query($conn, "DELETE FROM blog WHERE id=$id");
    header('Location: list_blog.php');
}
?>
