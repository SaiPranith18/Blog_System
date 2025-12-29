<?php
include "../config/db.php";

$key = $_GET['q'];

$result = mysqli_query($conn,
    "SELECT * FROM posts WHERE title LIKE '%$key%'"
);

while ($row = mysqli_fetch_assoc($result)) {
    echo "<h3>{$row['title']}</h3>";
}
