<?php
require '../config.php'; // Koneksi ke database
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $result = mysqli_query($conn, "SELECT * FROM blog WHERE id=$id");
    $row = mysqli_fetch_assoc($result);
}

if(isset($_POST['update'])){
    $title = $_POST['title'];
    $content = $_POST['content'];
    $thumbnail = $_FILES['thumbnail']['name'];
    $target = "uploads/".basename($thumbnail);

    if($thumbnail){
        move_uploaded_file($_FILES['thumbnail']['tmp_name'], $target);
        $sql = "UPDATE blog SET title='$title', content='$content', thumbnail='$thumbnail' WHERE id=$id";
    } else {
        $sql = "UPDATE blog SET title='$title', content='$content' WHERE id=$id";
    }
    
    mysqli_query($conn, $sql);
    header('Location: list_blog.php');
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Edit Blog</title>
    <script src="/path/to/assets/tinymce/tinymce.min.js"></script>
    <script>
    tinymce.init({
        selector: 'textarea#content',
        height: 500,
        menubar: false,
        plugins: [
        'advlist autolink lists link image charmap print preview anchor',
        'searchreplace visualblocks code fullscreen',
        'insertdatetime media table paste code help wordcount'
        ],
        toolbar: 'undo redo | formatselect | bold italic backcolor | \
                alignleft aligncenter alignright alignjustify | \
                bullist numlist outdent indent | removeformat | help'
    });
    </script>
        <style>
        * {
            margin: 50;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Courier New', Courier, monospace;
        }
        body {
            background-color: #0d1117;
            color: #c9d1d9;

        }
        form {
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 80%;
            max-width: 600px;
        }
        input[type="text"], textarea, input[type="file"], input[type="button"], button {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: none;
            border-radius: 5px;
        }
        input[type="text"], textarea, input[type="file"] {
            background-color: #161b22;
            color: #c9d1d9;
            border: 1px solid #21262d;
        }
        input[type="button"], button {
            background-color: #ffeb3b;
            color: #0d1117;
            cursor: pointer;
        }
        input[type="button"]:hover, button:hover {
            background-color: #ffd700;
        }
    </style>

</head>
<body>
    <form method="POST" enctype="multipart/form-data">
        <input type="text" name="title" value="<?php echo $row['title']; ?>" required><br>
        <textarea id="content" name="content" required><?php echo $row['content']; ?></textarea><br>
        <input type="file" name="thumbnail"><br>
        <input type="button" value="Kembali" onclick="window.location.href='dashboard.php';"><button type="submit" name="update">Update</button>
    </form>
</body>
</html>
