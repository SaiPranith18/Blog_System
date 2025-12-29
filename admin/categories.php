<?php
include "../config/db.php";

if (isset($_POST['add'])) {
    $name = $_POST['name'];
    $slug = strtolower(str_replace(" ", "-", $name));

    mysqli_query($conn,
        "INSERT INTO categories(name, slug) VALUES('$name','$slug')"
    );
}
?>

<form method="post">
    <input type="text" name="name" placeholder="Category name" required>
    <button name="add">Add Category</button>
</form>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">


<ul>
<?php
$result = mysqli_query($conn, "SELECT * FROM categories");
while ($row = mysqli_fetch_assoc($result)) {
    echo "<li>{$row['name']}</li>";
}
?>
</ul>
