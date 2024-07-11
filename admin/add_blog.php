<?php
require '../config.php';

if(isset($_POST['submit'])){
    $title = $_POST['title'];
    $content = $_POST['content'];
    $thumbnail = $_FILES['thumbnail']['name'];
    $target = "uploads/".basename($thumbnail);

    $sql = "INSERT INTO blog (title, content, thumbnail) VALUES ('$title', '$content', '$thumbnail')";
    mysqli_query($conn, $sql);

    if (move_uploaded_file($_FILES['thumbnail']['tmp_name'], $target)) {
        $msg = "Thumbnail uploaded successfully";
    } else {
        $msg = "Failed to upload thumbnail";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Add Blog</title>
    <script src="tinymce/js/tinymce/tinymce.min.js"></script>
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
            toolbar: 'undo redo | formatselect | bold italic backcolor | ' +
                'alignleft aligncenter alignright alignjustify | ' +
                'bullist numlist outdent indent | removeformat | help'
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
        <input type="text" name="title" placeholder="Title" required><br>
        <textarea id="content" name="content" placeholder="Content" required></textarea><br>
        <input type="file" name="thumbnail"><br>
        <input type="button" value="Kembali" onclick="window.location.href='dashboard.php';">
        <button type="submit" name="submit">Submit</button>
    </form>
</body>
</html>
