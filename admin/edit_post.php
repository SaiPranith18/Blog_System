<?php
include "../config/db.php";

$id = $_GET['id'];

if (isset($_POST['update'])) {
    $title = $_POST['title'];
    $content = $_POST['content'];

    mysqli_query($conn,
        "UPDATE posts SET title='$title', content='$content' WHERE id=$id"
    );

    echo "Post Updated";
}

$post = mysqli_fetch_assoc(
    mysqli_query($conn, "SELECT * FROM posts WHERE id=$id")
);
?>

<form method="post">
    <input type="text" name="title" value="<?= $post['title'] ?>"><br><br>
    <textarea name="content"><?= $post['content'] ?></textarea><br><br>
    <button name="update">Update</button>
</form>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

