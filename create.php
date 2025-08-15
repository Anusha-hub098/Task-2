<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $title = $_POST['title'];
    $content = $_POST['content'];
    $conn->query("INSERT INTO posts (title, content) VALUES ('$title', '$content')");
    header("Location: index.php");
}
?>
<!DOCTYPE html>
<html>
<head><title>Create Post</title></head>
<body>
    <h1>Create New Post</h1>
    <form method="post">
        <input type="text" name="title" placeholder="Post Title" required><br><br>
        <textarea name="content" placeholder="Post Content" required></textarea><br><br>
        <button type="submit">Save</button>
    </form>
</body>
</html>
