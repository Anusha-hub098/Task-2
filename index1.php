<?php
include 'db.php';
$result = $conn->query("SELECT * FROM posts ORDER BY created_at DESC");
?>
<!DOCTYPE html>
<html>
<head>
    <title>My Blog</title>
</head>
<body>
    <h1>All Posts</h1>
    <a href="create.php">Create New Post</a>
    <hr>
    <?php while ($row = $result->fetch_assoc()): ?>
        <h2><?php echo $row['title']; ?></h2>
        <p><?php echo $row['content']; ?></p>
        <small>Posted on <?php echo $row['created_at']; ?></small><br>
        <a href="edit.php?id=<?php echo $row['id']; ?>">Edit</a> |
        <a href="delete.php?id=<?php echo $row['id']; ?>" onclick="return confirm('Delete this post?')">Delete</a>
        <hr>
    <?php endwhile; ?>
</body>
</html>
