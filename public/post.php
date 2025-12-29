<?php
include "../config/db.php";

$slug = $_GET['slug'];

$post = mysqli_fetch_assoc(
    mysqli_query($conn, "SELECT * FROM posts WHERE slug='$slug'")
);

echo "<h2>{$post['title']}</h2>";
echo "<p>{$post['content']}</p>";
