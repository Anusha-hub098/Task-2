<?php
include 'db.php';
$id = $_GET['id'];
$post = $conn->query("SELECT * FROM posts WHERE id=$id")->fetch_assoc();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $title = $_POST['title'];
    $content = $_POST['content'];
    $conn->query("UPDATE posts SET title='$title', content='$content' WHERE id=$id");
    header("Location: index.php");
}
?>
<!DOCTYPE html>
<html>
<head><title>Edit Post</title></head>
<body>
    <h1>Edit Post</h1>
    <form method="post">
        <input type="text" name="title" value="<?php echo $post['title']; ?>" required><br><br>
        <textarea name="content" required><?php echo $post['content']; ?></textarea><br><br>
        <button type="submit">Update</button>
    </form>
</body>
</html>
